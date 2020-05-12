<?php

namespace denis909\sbadmin2;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class TopMenu extends \denis909\yii\Menu
{

    public $encodeLabels = false;

    public $options = ['class' => 'navbar-nav ml-auto'];

    public $itemOptions = ['class' => 'nav-item dropdown no-arrow mx-1'];

    public $linkOptions = ['class' => 'nav-link'];

    public $countOptions = ['class' => 'badge badge-danger badge-counter'];

    protected function renderItem($item)
    {
        if (array_key_exists('count', $item))
        {
            if ($item['count'] > 0)
            {
                $countOptions = ArrayHelper::getValue($item, 'countOptions', $this->countOptions);

                $item['label'] .= Html::tag('span', $item['count'], $countOptions);
            }
        }

        return parent::renderItem($item);
    }

}