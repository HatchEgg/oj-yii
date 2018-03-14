<?php

namespace app\models;

use yii\base\Model;
use app\models\Teach;
use yii\helpers\Json;
use Yii;
class UpdateClassForm extends Model
{
    public $id;
    public $course;
    public $description;
    public $start_date;
    public $end_date;
    public $students;
    public $homeworks;
    public $lessons;

    public function rules()
    {
        return [
            ['id','integer'],
            ['course','string'],
            ['description','string'],
            [['start_date','end_date'],'datetime','format'=>'yyyy-mm-dd'],
            [['end_date'],'compareDate'],
            ['students','safe'],
            ['homeworks','safe'],
            ['lessons','safe']
        ];
    }

    public function compareDate($attribute,$params)
    {
        if(time($this->start_date)>time($this->end_date)){
            $this->addError($attribute, "find one error:endDate < startDate ?");
            return false;
        }
        return true;
    }

    public function commit()
    {
        //echo '<pre>' ;print_r(json_decode(Json::encode($this))); echo '</pre>';die;
        $transaction=Yii::$app->db->beginTransaction();
        try{
            $class=Teach::findOne($this->id);
            if($class==null) throw new \Exception("未找到课程");
            $class->course=$this->course;
            $class->description=$this->description;
            $class->start_date=$this->start_date;
            $class->end_date=$this->end_date;
            $class->save();
            
            TeachStudent::deleteAll(['teach_id'=>$class->id]);
            foreach($this->students as $one)
            {
                $ts=new TeachStudent;
                $student=User::findOne(['username'=>$one['number'],'name'=>$one['name'],'role'=>'student']);
                $ts->student_id=$student->id;
                $ts->teach_id=$class->id;
                $ts->save();
            }

            $sql="delete from homework where teach_id=".$class->id;
            foreach($this->homeworks as $one)
            {
                //$homework=Homework::find(['teach_id'=>$class->id,'name'=>$one['name']]);
                $sql.=" and name!='".$one['name']."'";
            }
            Yii::$app->db->createCommand($sql)->execute();

            $sql="delete from lesson where teach_id=".$class->id;
            foreach($this->lessons as $one)
            {
                ///$homework=Lesson::find(['teach_id'=>$class->id,'name'=>$one['name']]);
                $sql.=" and name!='".$one['name']."'";
            }
            Yii::$app->db->createCommand($sql)->execute();

            $transaction->commit();
            
        }catch(Exception $e)
        {
            $transaction->rollback();
        }

    }
}