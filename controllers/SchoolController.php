<?php

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;



class SchoolController extends Controller{
    
    public function actionGetAcademy(){
        $academies=array('1'=>'软件工程','2'=>'经管学院');
        return json_encode($academies);
    }
    public function actionGetMajor(){
        $majors=array('1'=>'专业1','2'=>'专业2');
        return json_encode($majors);
    }
    public function actionGetClass(){
        $classes=array('1'=>'软件一班','2'=>'软件二班');
        return json_encode($classes);
    }
}