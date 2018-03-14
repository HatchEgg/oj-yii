<?php

namespace app\controllers;

use Yii;
use yii\base\Controller;
use yii\helpers\Json;
use app\models\Contest;
use app\models\ContestProblem;
use app\models\ContestStudent;
use app\models\AddContestForm;
use app\models\UpdateContestForm;

class ContestController extends Controller
{
    // public function init(){ 
    //     $this->enableCsrfValidation = false; 
    //  }  
    public function actionIndex(){
        $contests=Contest::find()->all();
        echo $this->renderPartial('index.php',['contests'=>$contests]);
    }
    public function actionAdd()
    {
        $params=Yii::$app->request->post();
        $form=new AddContestForm;
        echo '<pre>';
        echo "请求参数\n";
        echo var_dump($params);
        echo "模型\n";
        if($form->load($params,'')&&$form->validate()){
            $form->submit();
            var_dump(json_decode(Json::encode($form)));
            
        }
        else{
            
            print_r($form->getErrors());
            
        }
        echo '</pre>';
        echo $this->renderPartial('add.php');
    }
    public function actionDetail()
    {
        $id=Yii::$app->request->get('id');
        $contest=Contest::findOne(['id'=>$id]);
        $problems=$contest->problems;
        $students=$contest->students;
        $data=['contest'=>$contest,'problems'=>$problems,'students'=>$students];
        echo $this->renderPartial('edit.php',$data);
    }
    public function actionGetStudent()
    {
        $id=Yii::$app->request->get('id');
        $contest=Contest::findOne(['id'=>$id]);
        $problems=$contest->problems;
        return Json::encode($problems);
    }
    public function actionGetProblem()
    {
        $id=Yii::$app->request->get('id');
        $contest=Contest::findOne(['id'=>$id]);
        $students=$contest->students;
        return Json::encode($students);
    }
    public function actionEdit()
    {
        $params=Yii::$app->request->post();
        $form=new UpdateContestForm;
        // echo '<pre>';
        // echo "请求参数\n";
        // echo var_dump($params);
        // echo "模型\n";
        if($form->load($params,'')&&$form->validate()){
            $form->submit();
            $this->actionIndex();
        }
        else{           
            print_r($form->getErrors());           
        }
        
        
    }
}