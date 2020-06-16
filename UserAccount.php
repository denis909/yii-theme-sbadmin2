<?php

namespace denis909\themes\sbadmin2;

class UserAccount extends \yii\base\Widget
{

    public $user;

    public $userMenu = [];

    public $accountMenu = [];

    public $accountMenuClass = AccountMenu::class;

    public $userMenuClass = UserMenu::class;

    public $avatarUrl;

    public $username;

    public function run()
    {
        if (!$this->user)
        {
            return;
        }

        return $this->render('user-account', [
            'userMenu' => $this->userMenu,
            'user' => $this->user,
            'accountMenuClass' => $this->accountMenuClass,
            'userMenuClass' => $this->userMenuClass,
            'accountMenu' => $this->accountMenu,
            'avatarUrl' => $this->avatarUrl,
            'username' => $this->username
        ]);
    }

}