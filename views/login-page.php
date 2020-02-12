<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = $title;

$this->params['breadcrumbs'][] = $this->title;

Yii::$app->controller->layout = $layout;

?>

<?php $form = ActiveForm::begin(['id' => 'login-form']);?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]);?>

<?= $form->field($model, 'password')->passwordInput();?>

<?= $form->field($model, 'rememberMe')->checkbox();?>

<div class="text-center">

<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);?>

</div>

<?php ActiveForm::end();?>