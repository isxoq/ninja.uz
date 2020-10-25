<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900",

        "vendor/bootstrap/css/bootstrap.min.css",

        "vendor/font-awesome/css/all.min.css",

        "vendor/owl.carousel/assets/owl.carousel.min.css",

        "vendor/magnific-popup/magnific-popup.min.css",

        "css/stylesheet.css",
    ];
    public $js = [

        "vendor/jquery/jquery.min.js",
        "vendor/bootstrap/js/bootstrap.bundle.min.js",
        "vendor/jquery.easing/jquery.easing.min.js",
        "vendor/jquery.appear/jquery.appear.min.js",
        "vendor/jquery.countTo/jquery.countTo.min.js",
        "vendor/parallaxie/parallaxie.min.js",
        "vendor/typed/typed.min.js",
        "vendor/owl.carousel/owl.carousel.min.js",
        "vendor/isotope/isotope.pkgd.min.js",
        "vendor/magnific-popup/jquery.magnific-popup.min.js",
        "js/theme.js",

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
