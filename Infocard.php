<?php

namespace denis909\themes\sbadmin2;

class Infocard extends \yii\base\Widget
{

    public $content;

    public $label;

    public $icon;

    public function run()
    {
        return $this->render('infocard', [
            'content' => $this->content,
            'label' => $this->label,
            'icon' => $this->icon
        ]);
    }

}