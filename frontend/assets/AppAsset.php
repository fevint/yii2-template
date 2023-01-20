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
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700',
        'vendor/aos/aos.css',
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/bootstrap-icons/bootstrap-icons.css',
        'vendor/glightbox/css/glightbox.min.css',
        'vendor/swiper/swiper-bundle.min.css',
        'css/style.css',
    ];
    public $js = [
        'vendor/purecounter/purecounter_vanilla.js',
        'vendor/aos/aos.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/glightbox/js/glightbox.min.js',
        'vendor/isotope-layout/isotope.pkgd.min.js',
        'vendor/swiper/swiper-bundle.min.js',
        'vendor/php-email-form/validate.js',
        'js/main.js',

    ];
}
