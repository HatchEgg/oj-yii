<?php
/**
 * Created by PhpStorm.
 * User: zuizui
 * Date: 2017/11/13
 * Time: 23:52
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
    $form = ActiveForm::begin();?>
    <?=$form->field($model,'name');?>
    <?=$form->field($model,'email');?>

    <div class="form-group">
        <?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>

    </div>
<?php   ActiveForm::end();?>


