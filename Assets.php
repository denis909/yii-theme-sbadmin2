<?php

namespace denis909\sbadmin2;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $sourcePath = '@npm/startbootstrap-sb-admin-2';
    
    public $css = [
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css'
    ];
    
    public $js = [
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        'vendor/chart.js/Chart.min.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
        'denis909\glyphicons\GlyphiconsAsset',
        AssetsLocal::class
    ];

    public function init()
    {
        parent::init();

        require_once __DIR__ . '/BootstrapAsset.php';
        
        require_once __DIR__ . '/BootstrapPluginAsset.php';        
    }

}