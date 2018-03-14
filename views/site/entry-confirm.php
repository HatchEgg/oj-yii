<?php
/**
 * Created by PhpStorm.
 * User: zuizui
 * Date: 2017/11/13
 * Time: 23:46
 */
use yii\helpers\Html;
?>

<p>you have entered the follow information:</p>
<ul>
    <li><label>Name</label>:<?= Html::encode($model->name)?></li>
    <li><label>Email</label>:<?=Html::encode($model->email)?></li>
</ul>

