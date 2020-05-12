<?php

namespace denis909\sbadmin2;

class UserAccount extends \yii\base\Widget
{

    public $user;

    public $userMenu = [];

    public $userMenuOptions = [];

    public $theme;

    public function run()
    {
        return $this->render('user-account', [
            'theme' => $this->theme,
            'userMenu' => $this->userMenu,
            'user' => $this->user
        ]);
    }

}