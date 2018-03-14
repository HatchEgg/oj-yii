<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Json;
use app\models\AddClassForm;
use app\models\User;
use app\models\Teach;
use app\models\Lesson;
use app\models\Homework;
use app\models\UpdateClassForm;
use app\models\AddHomeworkForm;
use app\models\UpdateHomeworkForm;
use app\models\UpdateLessonForm;
use app\models\AddLessonForm;
use app\models\AddStudentFileForm;
use app\models\DeleteTeachStudent;
use yii\web\UploadedFile;

class ClassController extends Controller{
    public $layout='admin.php';
    public function init(){ 
        $this->enableCsrfValidation = false; 
     }  
    public function actionAdd()
    {
        $request=Yii::$app->request;

        $form=new AddClassForm();
        if($request->isPost && $form->load($request->post(),'') && $form->validate()){
            $result=$form->commit();
               
        }
        else{
            $this->printErrors($form->getErrors());
            $teacher_id=6;
            $teacher=User::findOne($teacher_id);
            echo $this->renderPartial('add.php',['teacher'=>$teacher]);
        }
    }
    public function actionList()
    {
        $id=6;
        $classes=Teach::find()->with('user')->where(['teacher_id'=>$id])->all();
        // echo '<pre>';
        // echo print_r($classes);
        // echo '</pre>';
        echo $this->renderPartial('list.php',['classes'=>$classes]);
    }
    public function actionInfo()
    {
        $request=Yii::$app->request;
        $code=$request->get('code');
        $class=Teach::find()->with('user')->where(['id'=>$code])->one();
        $lessons=$class->lessons;
        $homeworks=$class->homeworks;
        $studentids=$class->studentids;
        $students=array();
      
        foreach($studentids as $id)
        {
            $student=$id->student;
            if(isset($student->password)) unset($student->password);
            $students[]=$student;
        }
        echo $this->renderPartial('info.php',['class'=>$class,'lessons'=>$lessons,'homeworks'=>$homeworks,'students'=>$students]);
    }
    public function actionUpdate()
    {
        $form=new UpdateClassForm();
        if($form->load(Yii::$app->request->post(),'')&&$form->validate()){
            $form->commit();
            $this->actionList(); 
        }else{
            $errors=$form->getErrors();
            if(count($errors)>0)$this->printErrors($form->getErrors());
            var_dump(Yii::$app->request->post());
        }
    }
    public function actionAddHomework()
    {
        $id=Yii::$app->request->post('id');
        $class=Teach::findOne(['id'=>$id]);
        echo $this->renderPartial('add-homework.php',['class'=>$class]);
    }
    public function actionAddHomeworkSubmit()
    {
        $obj=Yii::$app->request->post();
 
        $form=new AddHomeworkForm();

        $form->teach_id=$obj['teach_id'];
        $form->name=$obj['name'];
        $form->description=$obj['description'];
        $form->start_date=$obj['start_date'];
        $form->end_date=$obj['end_date'];
        $form->problems=$obj['problems'];

        // echo Json::encode(["form"=>$form]);
        // return;

        $result=$form->commit();
        
        //echo Json::encode(["form"=>$form,"result"=>$result]);

    }
    public function actionDeleteHomework()
    {
        $id=Yii::$app->request->post('id');
        Homework::findOne($id)->delete();
    }
    public function actionEditHomework()
    {
        $id=Yii::$app->request->post('id');
        $homework=Homework::findOne($id);
        $problems=$homework->problems;
        $class=$homework->class;
        echo $this->renderPartial('edit-homework.php',['class'=>$class,'homework'=>$homework,'problems'=>$problems]);
    }
    public function actionEditHomeworkSubmit()
    {
        $obj=Yii::$app->request->post();
 
        $form=new UpdateHomeworkForm();
        $form->id=$obj['id'];
        $form->name=$obj['name'];
        $form->description=$obj['description'];
        $form->start_date=$obj['start_date'];
        $form->end_date=$obj['end_date'];
        $form->problems=$obj['problems'];

        // echo Json::encode(["form"=>$form]);
        // return;

        $result=$form->commit();
    }
    public function actionAddLessonSubmit()
    {
        $obj=Yii::$app->request->post();
 
        $form=new AddLessonForm();

        $form->teach_id=$obj['teach_id'];
        $form->name=$obj['name'];
        $form->description=$obj['description'];
        $form->start_date=$obj['start_date'];
        $form->end_date=$obj['end_date'];
        $form->problems=$obj['problems'];

        // echo Json::encode(["form"=>$form]);
        // return;

        $result=$form->commit();
        
        //echo Json::encode(["form"=>$form,"result"=>$result]);

    }
    public function actionAddLesson()
    {
        $id=Yii::$app->request->post('teach_id');
        $class=Teach::findOne($id);
        echo $this->renderPartial('add-lesson.php',['class'=>$class]);
    }
    public function actionEditLesson()
    {
        $id=Yii::$app->request->post('id');
        $lesson=Lesson::findOne($id);
        $problems=$lesson->problems;
        $class=$lesson->class;
        $data=['class'=>$class,'lesson'=>$lesson,'problems'=>$problems];
        echo $this->renderPartial('edit-lesson.php',$data);
    }
    public function actionEditLessonSubmit()
    {
        $obj=Yii::$app->request->post();
 
        $form=new UpdateLessonForm();

        $form->id=$obj['id'];
        $form->name=$obj['name'];
        $form->description=$obj['description'];
        $form->start_date=$obj['start_date'];
        $form->end_date=$obj['end_date'];
        $form->problems=$obj['problems'];

        // echo Json::encode(["form"=>$form]);
        // return;

        $result=$form->commit();
        
        //echo Json::encode(["form"=>$form,"result"=>$result]);
    }
    public function actionDeleteLesson()
    {
        $id=Yii::$app->request->post('id');
        Lesson::findOne($id)->delete();
    }
    public function actionAddStudentFromFile()
    {
        $params=Yii::$app->request->post();
        $form = new AddStudentFileForm();
        $result=array();
        $result['message']="";
        
        if (Yii::$app->request->isPost) {
            $form->file = UploadedFile::getInstances($form, 'file');
            $form->teach_id=$params['teach_id'];
            $result['file']=$form->file[0];
            $result['post']=$params;
            
            $result['files']=$form->file ;
          
            if ($form->file && $form->validate()) {
                $result['student_list']=$form->commit();
            }
        }
        $result['file']=$form;
        $result['post']=$params;
        echo Json::encode($result);       
        
    }
    public function actionDeleteStudent()
    {
        $params=Yii::$app->request->post();
        $delete=new DeleteTeachStudent;
        echo Json::encode($params);
        if($delete->load($params,'')){
            $delete->commit();
        }else{
            echo "load error";
        }
    }
    public function actionTestPost()
    {
        echo json_encode(Yii::$app->request->post());
    }
    public function printErrors($errors)
    {
        echo "<pre>";
        if($errors==null) echo "ok";
        else foreach($errors as $ekey=>$evalue)
        {
            echo "$ekey:<br>";
            foreach($evalue as $k=>$e){
                echo "    $k:$e<br>";
            }
        }
        echo "</pre>";
    }
}