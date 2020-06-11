<?php

namespace denis909\themes\sbadmin2;

class Popup extends \yii\base\Widget
{

    public $content;

    public $header;

    public $footer;

    public $title;

    public function run()
    {
        return $this->render('popup', [
            'content' => $this->content,
            'header' => $this->header,
            'footer' => $this->footer,
            'title' => $this->title
        ]);
    }

}