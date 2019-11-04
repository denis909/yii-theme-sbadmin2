<?php

namespace denis909\sbadmin2;

use yii\helpers\ArrayHelper;

class MainMenu extends \denis909\yii\Menu
{

    public $theme;

    public $activateParents = true;

    public $options = [
        'id' => 'accordionSidebar',
        'class' => 'navbar-nav bg-gradient-primary sidebar sidebar-dark accordion'
    ];

    public $itemOptions = ['class' => 'nav-item'];

    public $linkOptions = ['class' => 'nav-link'];

    public $iconTemplate = '<i class="{icon}"></i> <span>{label}</span>';

    public $submenuTemplate = '<div id="{id}" class="collapse">{items}</div>';

    public $labelTemplate = '<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{id}">{label}</a>';

    public $submenuClass = MainMenu2::class;

    public $encodeLabels = false;

    public function renderItem($item)
    {
        $isActive = array_key_exists('active', $item) && $item['active'] ? true : false;

        $return = parent::renderItem($item);

        if ($isActive && !empty($item['_items']))
        {
            $return = str_replace('class="collapse"', 'class="collapse show"', $return);

            $return = str_replace('class="nav-link"', 'class="nav-link collapse"', $return);
        }

        return $return;
    }
    
}