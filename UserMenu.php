<?php

namespace denis909\themes\sbadmin2;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class UserMenu extends \yii\widgets\Menu
{

    public $options = [
        'tag' => 'div',
        'class' => 'dropdown-menu dropdown-menu-right shadow animated--grow-in',
        'aria-labelledby' => 'userDropdown'
    ];

    public $itemOptions = ['tag' => false];

    public $defaultLinkClass = 'dropdown-item';

    protected function renderLink($item)
    {
        $options = ArrayHelper::getValue($item, 'linkOptions', []);

        if (!array_key_exists('class', $options))
        {
            $options['class'] = $this->defaultLinkClass;
        }
        else
        {
            $options['class'] = $this->defaultLinkClass . ' ' .  $options['class'];
        }

        return Html::a('{label}', '{url}', $options);
    }

    protected function renderItem($item)
    {
        if (array_key_exists('content', $item))
        {
            return $item['content'];
        }

        if (empty($item['template']))
        {
            $item['template'] = $this->renderLink($item);
        }

        if (!empty($item['icon']))
        {
            $item['label'] = '<i class="' . $item['icon'] .'"></i> ' . $item['label'];
        }

        return parent::renderItem($item);
    }

    public function run()
    {
        if ($this->items)
        {
            $this->items[] = ['content' => '<div class="dropdown-divider"></div>'];
        }

        $this->items[] = [
            'label' => 'Logout',
            'url' => '#',
            'linkOptions' => [
                'data-toggle' => 'modal',
                'data-target' => '#logoutModal'
            ],
            'icon' => 'fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'
        ];

        return parent::run();
    }

}