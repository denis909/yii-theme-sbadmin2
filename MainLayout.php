<?php

namespace denis909\sbadmin2;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public $actionMenu;

    public $mainMenu;

    public $enableCard;

    public $cardTitle;

    public $user;

    public $logoutUrl = ['/site/logout'];

    public $copyright = 'Copyright &copy; Your Website 2019';

    public $logoUrl;

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'theme' => $this->theme,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'enableCard' => $this->enableCard,
            'cardTitle' => $this->cardTitle,
            'user' => $this->user,
            'logoutUrl' => $this->logoutUrl,
            'copyright' => $this->copyright,
            'logoUrl' => $this->logoUrl
        ]);
    }

}