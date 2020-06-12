<?php

namespace denis909\themes\sbadmin2;

class LoginLayout extends \yii\base\Widget
{

    public $content;

    public $enableImage = true;

    public $imageUrl;

    public $layoutOptions = [];

    public function run()
    {
        return $this->render('login-layout', [
            'content' => $this->content,
            'enableImage' => $this->enableImage,
            'imageUrl' => $this->imageUrl,
            'layoutOptions' => $this->layoutOptions
        ]);
    }

}