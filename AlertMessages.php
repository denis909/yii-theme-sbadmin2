<?php

namespace denis909\sbadmin2;

class AlertMessages extends \yii\base\Widget
{

    public $theme;

    public $messages;

    public $type = 'errors';

    public function run()
    {
        return $this->render('alert-messages', [
            'type' => $this->type,
            'messages' => (array) $this->messages,
            'theme' => $this->theme
        ]);
    }

}