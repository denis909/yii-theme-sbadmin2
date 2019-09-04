<?php

namespace yii\bootstrap4;

use yii\web\AssetBundle;

class BootstrapPluginAsset extends AssetBundle
{
        
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];

}