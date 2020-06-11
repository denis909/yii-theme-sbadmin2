<?php

namespace denis909\themes\sbadmin2;

class UserAccount extends \yii\base\Widget
{

    public $user;

    public $userMenu = [];

    public $userMenuOptions = [];

    public function run()
    {
        if (!$this->user)
        {
            return;
        }

        return $this->render('user-account', [
            'userMenu' => $this->userMenu,
            'user' => $this->user
        ]);
    }

}