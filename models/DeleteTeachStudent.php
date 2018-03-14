<?php

namespace app\models;

use yii\base\Model;
use app\models\TeachStudent;
use yii\helpers\Json;
class DeleteTeachStudent extends Model{
    public $teach_id;
    public $student_id;

    public function rules()
    {
        return [
            ['teach_id','string'],
            ['student_id','string']
        ];
    }
    public function commit()
    {
        $ts=TeachStudent::findOne(['student_id'=>$this->student_id,'teach_id'=>$this->teach_id]);
        if($ts==null)
        {
           echo Json::encode($this);
        }
        else $ts->delete();
    }
}