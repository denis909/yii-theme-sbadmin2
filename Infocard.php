<?php

namespace denis909\sbadmin2;

class Infocard extends \yii\base\Widget
{

    public $content;

    public $label;

    public $icon;

    public $theme;

    public function run()
    {
        return $this->render('infocard', [
            'content' => $this->content,
            'theme' => $this->theme,
            'label' => $this->label,
            'icon' => $this->icon
        ]);
    }

}