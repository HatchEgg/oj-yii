<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class HomeworkItem extends ActiveRecord{
    public static function tableName()
    {
        return '{{homework_item}}';
    }

}