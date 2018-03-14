<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models\Teach;
use app\models\TeachStudent;
use app\models\Lesson;
use app\models\Homework;
use yii\helpers\Json;
class Teach extends ActiveRecord{
    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'teacher_id']);
    }
    public function getLessons()
    {
        return $this->hasMany(Lesson::className(),['teach_id'=>'id']);
    }
    public function getHomeworks()
    {
        return $this->hasMany(Homework::className(),['teach_id'=>'id']);
    }
    public function getStudentids()
    {
        return $this->hasMany(TeachStudent::className(),['teach_id'=>'id'])->orderBy('student_id asc');
    }
}