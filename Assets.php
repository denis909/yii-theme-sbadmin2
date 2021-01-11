<?php

namespace denis909\themes\sbadmin2;

class Assets extends \yii\web\AssetBundle
{

    public $sourcePath = '@npm/startbootstrap-sb-admin-2';
    
    public $css = [
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'css/sb-admin-2.min.css'
    ];
    
    public $js = [
        ['vendor/jquery/jquery.min.js', 'position' => \yii\web\View::POS_HEAD],
        ['vendor/bootstrap/js/bootstrap.bundle.min.js', 'position' => \yii\web\View::POS_HEAD],
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/sb-admin-2.min.js',
        'vendor/chart.js/Chart.min.js'
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset', // empty
        'yii\bootstrap4\BootstrapAsset', // empty
        'yii\bootstrap4\BootstrapPluginAsset', // empty
        'denis909\yii\GlyphiconsAsset',
        'denis909\themes\sbadmin2\AssetsLocal'
    ];

}