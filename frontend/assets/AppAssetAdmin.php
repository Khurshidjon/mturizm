<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAssetAdmin extends AssetBundle
{
    public $basePath = '@webroot/src_admin';
    public $baseUrl = '@web/src_admin';
    public $css = [
        'src_vendor/fonts/boxicons.css',
        'src_vendor/css/core.css',
        'src_vendor/css/theme-default.css',
        'css/demo.css',
        'src_vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
        'src_vendor/libs/apex-charts/apex-charts.css',
    ];

    public $js = [
        'src_vendor/js/helpers.js',
        'js/config.js',
//        'src_vendor/libs/jquery/jquery.js',
        'src_vendor/libs/popper/popper.js',
        'src_vendor/js/bootstrap.js',
        'src_vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
        'src_vendor/js/menu.js',
        'src_vendor/libs/apex-charts/apexcharts.js',
        'js/main.js',
        'js/dashboards-analytics.js',
        'ckeditor/ckeditor_new.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
