<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Json;
use app\models\User;
use app\models\ContestStudent;

class Contest extends ActiveRecord{
    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'originator_id']);
    }
    public function getContestant()
    {
        return ContestStudent::find()->where(["contest_id"=>$this->id])->count();
    }
    public function getProblems()
    {
        $cps=ContestProblem::find()->where(["contest_id"=>$this->id])->all();
        $problems=array();
        foreach($cps as $cp)
        {
            $problems[]=Problem::findOne(['id'=>$cp->problem_id]);
        }
        return $problems;
    }
    public function getStudents()
    {
        $css=ContestStudent::find()->where(["contest_id"=>$this->id])->all();
        $students=array();
       
        foreach($css as $cs)
        {
            $students[]=User::findOne(['id'=>$cs->student_id]);
        }
        return $students;
    }
}