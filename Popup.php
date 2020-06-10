<?php

namespace denis909\themes\sbadmin2;

class Popup extends \yii\base\Widget
{

    public $content;

    public $header;

    public $footer;

    public $theme;

    public $title;

    public function run()
    {
        return $this->render('popup', [
            'content' => $this->content,
            'theme' => $this->theme,
            'header' => $this->header,
            'footer' => $this->footer,
            'title' => $this->title
        ]);
    }

}