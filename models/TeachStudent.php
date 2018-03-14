<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models\User;

class TeachStudent extends ActiveRecord{
    public function getStudent()
    {
        return $this->hasOne(User::className(),['id'=>'student_id']);
    }
}