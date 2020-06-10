<?php

namespace denis909\themes\sbadmin2;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class ActionMenu extends \yii\widgets\Menu
{

    public $theme;

    public $options = ['tag' => false];

    public $itemOptions = ['tag' => false];

    protected function renderLink($item)
    {
        $options = ArrayHelper::getValue($item, 'linkOptions', []);

        if (!array_key_exists('class', $options))
        {
            $options['class'] = 'd-none d-sm-inline-block btn btn-sm btn-primary shadow-sm';
        }
        else
        {
            $options['class'] = 'd-none d-sm-inline-block btn btn-sm shadow-sm ' .  $options['class'];
        }

        return Html::a('{label}', '{url}', $options);
    }

    protected function renderItem($item)
    {
        if (empty($item['template']))
        {
            $item['template'] = $this->renderLink($item);
        }

        return parent::renderItem($item);
    }

    public function run()
    {
        if (!$this->items)
        {
            return;
        }

        return parent::run();
    }

}