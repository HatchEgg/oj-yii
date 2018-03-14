<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Teach;
use app\models\TeachStudent;
use app\models\User;
class AddClassForm extends Model{

    public $teacher_id;
    public $name;
    public $description;
    public $start_date;
    public $end_date;
    public $students;

    
    public function rules()
    {
        return [
            ['teacher_id','safe'],
            ['name','string'],
            ['description','string'],
            [['start_date','end_date'],'date','format'=>'yyyy-MM-dd'],
            [['start_date'],'compareDate'],
            [['students'],'checkStudents'],
            
        ];
    }

    function checkStudents($attribute,$params){
        foreach($this->students as $student)
        {
            if(!isset($student['number'])||!preg_match("/^\d*$/",$student['number'])) $this->addError($attribute,"学号必须存在且为整数");
            if(!isset($student['name'])) $this->addError($attribute,"姓名必须存在");
        }
    }
    public function commit()
    {
        $transaction = \Yii::$app->db->beginTransaction();
        try{
            $newTeach=new Teach();
            $newTeach->teacher_id=$this->teacher_id;
            $newTeach->course=$this->name;
            $newTeach->start_date=$this->start_date;
            $newTeach->end_date=$this->end_date;
            if($newTeach->save()){
                foreach($this->students as $one){
                    $ts=new TeachStudent;
                    $student=User::findOne(['username'=>$one['number'],'name'=>$one['name'],'role'=>'student']);
                    if($student==null) throw new \Exception('学生不存在');
                    $ts->teach_id=$newTeach->id;
                    $ts->student_id=$student->id;
                    $ts->save();
                }
            }
            else throw new \Exception('插入课程异常');
        }catch(Exception $e){
            $transaction->rollback();
        }

    }
    public function compareDate($attribute,$params)
    {
        if(time($this->start_date)>time($this->end_date)){
            $this->addError($attribute, "find one error:endDate < startDate ?");
            return false;
        }
        return true;
    }
}