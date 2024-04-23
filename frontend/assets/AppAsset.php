<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot/template';
    public $baseUrl = '@web/template';
    public $css = [
        'css/animate.css',
        'css/magnific-popup.css',
        'css/bootstrap.min.css',
        'css/boxicons.min.css',
        'font/flaticon.css',
        'css/owl.carousel.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        "js/jquery-3.6.0.min.js",
        "js/owl.carousel.min.js",
        "js/bootstrap.min.js",
        "js/jquery-ui.min.js",
        "js/popper.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/wow.min.js",
        "js/typed.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap5\BootstrapAsset',
    ];
}
