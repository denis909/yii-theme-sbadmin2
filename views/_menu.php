<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

if ($logoUrl)
{
    $logo = Html::img($logoUrl, ['height' => '24px']);
}
else
{
    $logo = '<div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>';
}

if ($optionsMenu)
{
    $mainMenu['options'] = [
        'label' => $optionsLabel,
        'icon' => 'fas fa-fw fa-cogs',
        'items' => $optionsMenu
    ];
}

$items = ArrayHelper::merge(
    [
        [
            'template' => '<!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="' . Url::to(['/']) . '">
                ' . $logo . '
                <div class="sidebar-brand-text mx-3">' . Yii::$app->name . '</div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">'
        ]
    ],
    $mainMenu ? $mainMenu : [],
    [
        [
            'template' => '<!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>',
            'options' => [
                'style' => 'display: block;',
                'class' => 'text-center'
            ]
        ]
    ]
);

echo $theme->mainMenu(['items' => $items]);