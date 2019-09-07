<?php

namespace denis909\sbadmin2;

class Layout extends \yii\base\Widget
{

    public $theme;

    public $content;

    public function init()
    {
        parent::init();
    
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        if (!$content && $this->content)
        {
            $content = $this->content;
        }

        return $this->render('layout', [
            'content' => $content,
            'theme' => $this->theme
        ]);
    }

}