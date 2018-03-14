<?php

namespace app\models;

use yii\base\Model;
use app\models\Contest;
use app\models\ContestStudent;
use app\models\ContestProblem;


class UpdateContestForm extends Model{
    public $id;
    public $title;
    public $teacher;
    public $description;
    public $start_date;
    public $end_date;
    public $available;
    public $can_sign;
    public $need_password;
    public $problems;
    public $students;
    public $password;


    public function rules()
    {
        return [
            ['id','required'],
            ['title','string'],
            ['teacher','string'],
            ['description','string'],
            ['password','safe'],
            [['start_date','end_date'],'date','format'=>'yyyy-MM-dd'],
            [['available','can_sign','need_password'],'boolean'],
            [['problems'],'checkProblems'],
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

    function checkProblems($attribute,$params){
        foreach($this->problems as $problem)
        {
            if(!isset($problem['id'])||!preg_match("/^\d*$/",$problem['id'])) $this->addError($attribute,"题号必须存在且为整数");
            if(!isset($problem['title'])) $this->addError($attribute,"题目名必须存在");
        }
    }

    function submit()
    {
        $transaction = \Yii::$app->db->beginTransaction();
        try{
            $contest=Contest::findOne($this->id);
            if($contest==null) throw new \Exception('未发现竞赛');
            $contest->title=$this->title;
            $contest->teacher=$this->teacher;
            $contest->description=$this->description;
            $contest->start_date=$this->start_date;
            $contest->end_date=$this->end_date;
            $contest->available=$this->available;
            $contest->can_sign=$this->can_sign;
            $contest->need_password=$this->need_password;
            $contest->password=$this->password;
            $contest->contestant=0;
            if($contest->save())
            {
                ContestProblem::deleteAll(['contest_id'=>$this->id]);
                ContestStudent::deleteAll(['contest_id'=>$this->id]);
                foreach($this->problems as $one){
                    $problem=new ContestProblem;
                    $one=Problem::findOne(['code'=>$one['id'],'title'=>$one['title']]);
                    if($one==null) throw new \Exception('未发现题目');
                    $problem->problem_id=$one->id;
                    $problem->contest_id=$contest->id;
                    $problem->save();
                }
                foreach($this->students as $one){
                    $student=new ContestStudent;
                    $one=User::findOne(['username'=>$one['number'],'name'=>$one['name']]);
                    if($one==null) throw new \Exception('未发现学生');
                    $student->student_id=$one->id;
                    $student->contest_id=$contest->id;
                    $student->save();
                }
            }
            $transaction->commit();
        }catch(Exception $e)
        {
            $transaction->rollback();
        }
    }
}