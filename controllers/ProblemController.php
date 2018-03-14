<?php
/**
 * Created by PhpStorm.
 * User: zuizui
 * Date: 2017/11/14
 * Time: 17:57
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
use app\models\Problem;
use app\models\AddProblemFileForm;
use yii\web\UploadedFile;

class ProblemController extends Controller{
    public $layout='admin.php';
    public function init(){ 
        $this->enableCsrfValidation = false; 
     }  
    public function actionIndex()
    {
        $problems=Problem::find()->orderBy('code ASC')->all();
        return $this->render('list',['problems'=>$problems]);
    }
    public function actionList()
    {
        $problems=Problem::find()->orderBy('code ASC')->all();
        echo $this->renderPartial('list',['problems'=>$problems]);
    }
    public function actionAdd()
    {  
        echo $this->renderPartial('add',[],true);
    }
    public function actionGet()
    {
        $code=Yii::$app->request->get('code', 'non-code');
        $problem=Problem::find()->where(['code'=>$code])->one();
        echo JSON::encode($problem); 
    }
    public function actionAddOne()
    {
        $title=Yii::$app->request->post('title', 'non-title');
        $problem=new Problem();
        $problem->id=self::getUUid();
        $problem->title=Yii::$app->request->post('title', 'non-title');
        $problem->time_limit=Yii::$app->request->post('time_limit', 0);
        $problem->memory_limit=Yii::$app->request->post('memory_limit', 0);
        $problem->description=Yii::$app->request->post('description', 'null');
        $problem->input=Yii::$app->request->post('input', 'null');
        $problem->output=Yii::$app->request->post('output', 'null');
        $problem->description=Yii::$app->request->post('description', 'null');
        $problem->sample_input=Yii::$app->request->post('sample_input', 'null');
        $problem->sample_output=Yii::$app->request->post('sample_output', 'null');
        $problem->save();
        echo $title;
    }
    public function actionAddFromFile()
    {
        $form = new AddProblemFileForm();
        $result=array();
        $result['count']=0;
        $result['files']=array();
        $result['message']="";
        if (Yii::$app->request->isPost) {
            $form->file = UploadedFile::getInstances($form, 'file');
            $result['message']=$form;
            if ($form->file && $form->validate()) {
                $result['back']=$form->commit();
            }
        }
     
        return Json::encode($result);
        
    }
    public function actionEditOne()
    {       
        $code=Yii::$app->request->post('code', 'non-code');
        $problem=Problem::findOne(['code'=>$code]);
        $problem->title=Yii::$app->request->post('title', 'non-title');
        $problem->time_limit=Yii::$app->request->post('time_limit', 0);
        $problem->memory_limit=Yii::$app->request->post('memory_limit', 0);
        $problem->description=Yii::$app->request->post('description', 'null');
        $problem->input=Yii::$app->request->post('input', 'null');
        $problem->output=Yii::$app->request->post('output', 'null');
        $problem->description=Yii::$app->request->post('description', 'null');
        $problem->sample_input=Yii::$app->request->post('sample_input', 'null');
        $problem->sample_output=Yii::$app->request->post('sample_output', 'null');
        $problem->save();
        echo $code;
    }
    public static function getUUid()
    {
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
        .substr($charid, 0, 8).$hyphen
        .substr($charid, 8, 4).$hyphen
        .substr($charid,12, 4).$hyphen
        .substr($charid,16, 4).$hyphen
        .substr($charid,20,12)
        .chr(125);// "}"
        return $uuid;
    }
    public function actionSearch()
    {
        $request=Yii::$app->request;
        $type=$request->get('type');
        $key=$request->get('key');
        
        $problems=Problem::find()->andFilterWhere(['like',$type,$key])->orderBy(['code'=>'asc'])->all();

        return Json::encode($problems);
    }
}