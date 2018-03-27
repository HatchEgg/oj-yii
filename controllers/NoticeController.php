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

class NoticeController extends Controller {
	public function actionAdd(){
		echo $this->renderPartial('add.php');
	}
}