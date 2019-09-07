<?php

namespace denis909\sbadmin2;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class MainMenu extends \yii\widgets\Menu
{

    public $theme;

    public $options = [
        'id' => 'accordionSidebar',
        'class' => 'navbar-nav bg-gradient-primary sidebar sidebar-dark accordion'
    ];

    public $encodeLabels = false;

    public $itemOptions = [
        'class' => 'nav-item'
    ];

    public $linkTemplate = '<a class="nav-link" href="{url}">{label}</a>';
    
}