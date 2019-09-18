<?php

namespace denis909\sbadmin2;

use yii\helpers\ArrayHelper;

class MainMenu extends \denis909\yii\Menu
{

    public $theme;

    public $options = [
        'id' => 'accordionSidebar',
        'class' => 'navbar-nav bg-gradient-primary sidebar sidebar-dark accordion'
    ];

    public $encodeLabels = false;

    public $itemOptions = ['class' => 'nav-item'];

    public $linkOptions = ['class' => 'nav-link'];

    public $iconTemplate = '<i class="{icon}"></i> <span>{label}</span>';

    public $submenuTemplate = '<div id="{id}" class="collapse"><div class="bg-white py-2 collapse-inner rounded">{items}</div></div>';

    public $labelTemplate = '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{id}">{label}</a>';

    public $submenuItem = [
        'options' => [
            'tag' => false
        ],
        'template' => '<a class="collapse-item" href="{url}">{label}</a>' 
    ];
    
}