<?php

namespace denis909\sbadmin2;

class LoginPage extends \yii\base\Widget
{

    public $title = 'Login';

    public $layout = '/login';

    public $model;

    public function run()
    {
        return $this->render('login-page', [
            'model' => $this->model,
            'title' => $this->title,
            'layout' => $this->layout
        ]);
    }

}