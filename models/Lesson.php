<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Lesson extends ActiveRecord{
    public function getClass()
    {
        return $this->hasOne(Teach::className(),['id'=>'teach_id']);
    }
    public function getProblems()
    {
        $problems=array();
        $items=LessonItem::findAll(['lesson_id'=>$this->id]);
        foreach($items as $item)
        {
            $problems[]=Problem::findOne(['id'=>$item->problem_id]);
        }
        return $problems;
    }
}