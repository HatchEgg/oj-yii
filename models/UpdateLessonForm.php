<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Lesson;
use app\models\LessonItem;

class UpdateLessonForm extends Model{

    public $name;
    public $id;
    public $description;
    public $start_date;
    public $end_date;
    public $problems;

    public function rules()
    {
        return [
            ['name','string'],
            ['name','required'],
            ['id','string'],
            ['description','string'],
            [['start_date','end_date'],'date','format'=>'yyyy-MM-dd'],
            [['problems'],'checkProblems']
        ];
    }

    function checkStudents($attribute,$params){
        foreach($this->problems as $problem)
        {
            if(!isset($problem['id'])||!preg_match("/^\d*$/",$problem['number'])) $this->addError($attribute,"题号必须存在且为整数");
            if(!isset($problem['title'])) $this->addError($attribute,"题目标题必须存在");
        }
    }
    public function commit()
    {
        $transaction = \Yii::$app->db->beginTransaction();
        try {
            $lesson =Lesson::findOne($this->id);
            $lesson->name=$this->name;
            $lesson->description=$this->description;
            $lesson->start_date=$this->start_date;
            $lesson->end_date=$this->end_date;
            if($lesson->save())
            {              
                LessonItem::deleteAll(['lesson_id'=>$this->id]);
                foreach($this->problems as $one){

                    $lesson_item=new LessonItem();
                    $problem=Problem::findOne(['code'=>$one['id'],'title'=>$one['title']]);
                    if($problem==null){
                        throw new \Exception("题目不存在");
                    }
                    $lesson_item->problem_id=$problem->id;
                    $lesson_item->lesson_id=$lesson->id;
                    if(!$lesson_item->save()){
                        $transaction->rollback();
                        return false;
                    }
                }        
                #save Dish
                $transaction->commit();
                return true;
            } else {
                $transaction->rollback();
                return false;
            }
        }  catch(Exception $e) {
            # 回滚事务
            $transaction->rollback();
            return false;
        }
    }

}