<?php

namespace denis909\themes\sbadmin2;

class TestLayout extends \yii\base\Widget
{

    public $content;

    public $user;

    public $mainMenu;

    public $errorMessages;

    public $successMessages;

    public $infoMessages;

    public $theme;

    public function run()
    {
        return $this->render('test-layout', [
            'theme' => $this->theme,
            'content' => $this->content
        ]);
    }

}