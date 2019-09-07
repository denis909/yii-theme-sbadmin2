<?php

namespace denis909\sbadmin2;

class Layout extends \yii\base\Widget
{

    public $theme;

    public function init()
    {
        parent::init();
    
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        return $this->render('layout', [
            'content' => $content,
            'theme' => $this->theme
        ]);
    }

}