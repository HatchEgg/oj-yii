<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\HomeworkItem;
use app\models\Teach;

class Homework extends ActiveRecord{
    public function getProblems()
    {
        $problems=array();
        $items=HomeworkItem::findAll(['homework_id'=>$this->id]);
        foreach($items as $item)
        {
            $problems[]=Problem::findOne(['id'=>$item->problem_id]);
        }
        return $problems;
    }
    public function getClass()
    {
        return $this->hasOne(Teach::className(),['id'=>'teach_id']);
    }
}