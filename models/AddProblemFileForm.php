<?php

namespace app\models;
use Yii;
use yii\base\Model;
use app\models\Problem;
use app\controllers\ExcelController;
use yii\helpers\Json;


class AddProblemFileForm extends Model{

    public $file;

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
            $problem = new Problem;
            $problem->id=Problem::getUUid();
            $problem->author=1;
            $problem->title=$one['title'];
            $problem->description=$one['description'];
            $problem->time_limit=$one['time_limit'];
            $problem->memory_limit=$one['memory_limit'];
            $problem->input=$one['input'];
            $problem->output=$one['output'];
            $problem->sample_input=$one['sample_input'];
            $problem->sample_output=$one['sample_output'];
            $problem->tip=$one['tip'];
            $result[]=$problem;
            $problem->save();
        }
        return $result;
       // Yii::$app->db->createCommand()->batchInsert(Problem::tableName(), $data->head, $data->reader)->execute();      
    }
}