<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Homework;
use app\models\HomeworkItem;

class UpdateHomeworkForm extends Model{
    public $id;
    public $name;
    public $description;
    public $start_date;
    public $end_date;
    public $problems;

    public function rules()
    {
        return [];
    }

    public function commit()
    {
        $transaction = \Yii::$app->db->beginTransaction();
        try {
            $homework = Homework::findOne($this->id);
            $homework->name=$this->name;
           
            $homework->description=$this->description;
            $homework->start_date=$this->start_date;
            $homework->end_date=$this->end_date;
            if($homework->save())
            {              
                HomeworkItem::deleteAll(['homework_id'=>$this->id]);
                foreach($this->problems as $one){

                    $homework_item=new HomeworkItem();
                    $problem=Problem::findOne(['code'=>$one['id'],'title'=>$one['title']]);
                    $homework_item->problem_id=$problem->id;
                    $homework_item->homework_id=$homework->id;
                    if(!$homework_item->save()){
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