<?php

namespace denis909\themes\sbadmin2;

use yii\helpers\ArrayHelper;

class MainLayout extends \denis909\theme\MainLayout
{

    public $accountMenuClass = AccountMenu::class;

    public $userMenuClass = UserMenu::class;

    public $logoUrl;

    public $topMenu = [];

    public $topMenuOptions = [];

    public $logoutUrl = ['/site/logout'];
    
    public function run()
    {
        return $this->render('main-layout', ArrayHelper::merge($this->params, [
            'logoUrl' => $this->logoUrl,
            'topMenu' => $this->topMenu,
            'topMenuOptions' => $this->topMenuOptions,
            'logoutUrl' => $this->logoutUrl,
            'accountMenuClass' => $this->accountMenuClass,
            'userMenuClass' => $this->userMenuClass
        ]));
    }

}