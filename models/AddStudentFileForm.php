<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\controllers\ExcelController;
use app\models\TeachStudent;
use app\models\User;
use yii\helpers\Json;
class AddStudentFileForm extends Model{
    public $file;
    public $teach_id;
    public function rules()
    {
        return [];
    }

    public function commit()
    {
        $filename=$this->file[0]->tempName;
        $data=ExcelController::readfile($filename);
        $result=array();

        
        foreach($data->reader as $one)
        {
            $student = new TeachStudent;
            $user=User::findOne(['username'=>$one['student_number']]);
            $student->student_id=$user->id;
            $student->teach_id=$this->teach_id;
            $student->save();
            $r=new \stdClass();
            $r->username=$user->username;
            $r->id=$user->id;
            $r->name=$user->name;
            $result[]=$r;
        }
     
        return $result;
       // Yii::$app->db->createCommand()->batchInsert(Problem::tableName(), $data->head, $data->reader)->execute();      
    }
}