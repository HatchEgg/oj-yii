<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
use app\models\Problem;
use app\models\User;


class UserController extends Controller{
    public $layout="admin.php";
    public function actionStudent()
    {
        echo $this->renderPartial('student.php');
    }
    public function actionTeacher()
    {
        echo $this->renderPartial('teacher.php'); 
    }
    public function actionSearch()
    {
        $request=Yii::$app->request;
        $type=$request->get('type');
        $key=$request->get('key');
        
        $problems=User::find()->andFilterWhere(['like',$type,$key])->orderBy(['username'=>'asc'])->all();

        return Json::encode($problems);
    }
    public function actionSearchStudent()
    {
        $request=Yii::$app->request;
        $type=$request->get('type');
        $key=$request->get('key');

        //防止注入
        
        ////

        $result=Yii::$app->db
        ->createCommand("select username number,name name,classroom class from student,user where user.id = student.id and $type like '%$key%'")
        ->queryAll();

        echo json_encode($result);
    }
}