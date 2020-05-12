<?php

namespace denis909\sbadmin2;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public $actionMenu;

    public $userMenu = [];

    public $mainMenu;

    public $enableCard;

    public $cardTitle;

    public $user;

    public $logoutUrl = ['/site/logout'];

    public $copyright = 'Copyright &copy; Your Website 2019';

    public $logoUrl;

    public $errorMessages = [];

    public $successMessages = [];

    public $infoMessages = [];

    public $messagesUrl;

    public $messagesCount = 0;

    public $messagesIcon = 'fas fa-envelope fa-fw';

    public $breadcrumbs = [];

    public $optionsMenu = [];

    public $optionsLabel = 'Options';

    public $alertsCount;

    public $alertsUrl;

    public $topMenu = [];

    public $topMenuOptions = [];

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'theme' => $this->theme,
            'actionMenu' => $this->actionMenu,
            'userMenu' => $this->userMenu,
            'mainMenu' => $this->mainMenu,
            'enableCard' => $this->enableCard,
            'cardTitle' => $this->cardTitle,
            'user' => $this->user,
            'logoutUrl' => $this->logoutUrl,
            'copyright' => $this->copyright,
            'logoUrl' => $this->logoUrl,
            'errorMessages' => (array) $this->errorMessages,
            'infoMessages' => (array) $this->infoMessages,
            'successMessages' => (array) $this->successMessages,
            'messagesCount' => $this->messagesCount,
            'messagesUrl' => $this->messagesUrl,
            'messagesIcon' => $this->messagesIcon,
            'breadcrumbs' => $this->breadcrumbs,
            'optionsMenu' => $this->optionsMenu,
            'optionsLabel' => $this->optionsLabel,
            'alertsCount' => $this->alertsCount,
            'alertsUrl' => $this->alertsUrl,
            'topMenuOptions' => $this->topMenuOptions,
            'topMenu' => $this->topMenu
        ]);
    }

}