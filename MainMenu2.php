<?php

namespace denis909\themes\sbadmin2;

class MainMenu2 extends \denis909\yii\Menu
{

    public $options = ['tag' => 'div', 'class' => 'bg-white py-2 collapse-inner rounded'];

    public $itemOptions = ['tag' => false];

    public $linkOptions = ['class' => 'collapse-item'];

    public $iconTemplate = '<i class="{icon}"></i> <span>{label}</span>';

    public $encodeLabels = false;

    protected function renderItem($item)
    {
        $isActive = array_key_exists('active', $item) && $item['active'] ? true : false;

        $return = parent::renderItem($item);

        if ($isActive)
        {
             $return = str_replace('class="collapse-item"', 'class="collapse-item active"', $return);
        }

        return $return;
    }

}