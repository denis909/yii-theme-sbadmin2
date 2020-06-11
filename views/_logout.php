<?php

use yii\helpers\Html;
use denis909\themes\sbadmin2\Popup;

echo Popup::widget([
    'title' => 'Ready to Leave?',
    'content' => 'Select "Logout" below if you are ready to end your current session.',
    'footer' => Html::beginForm($logoutUrl, 'post') 
        . Html::submitButton('Logout', ['class' => 'btn btn-primary'])
        . Html::endForm()
]);