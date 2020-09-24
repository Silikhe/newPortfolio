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
        "themes/assets/vendor/bootstrap/css/bootstrap.min.css",
        "themes/assets/vendor/icofont/icofont.min.css",
        "themes/assets/vendor/boxicons/css/boxicons.min.css",
        "themes/assets/vendor/venobox/venobox.css",
        "themes/assets/vendor/owl.carousel/assets/owl.carousel.min.css",
        "themes/assets/vendor/aos/aos.css",
        'css/site.css',
        "themes/assets/css/style.css",
        "themes/assets/vendor/bootstrap/css/bootstrap.min.css",
        "themes/assets/vendor/icofont/icofont.min.css",
        "themes/assets/vendor/boxicons/css/boxicons.min.css",
        "themes/assets/vendor/venobox/venobox.css",
        "themes/assets/vendor/owl.carousel/assets/owl.carousel.min.css",
        "themes/assets/vendor/aos/aos.css",
        "themes/assets/css/style.css"
    ];
    public $js = [
        "assets/vendor/jquery/jquery.min.js",
  "themes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
  "themes/assets/vendor/jquery.easing/jquery.easing.min.js",
  "themes/assets/vendor/php-email-form/validate.js",
  "themes/assets/vendor/waypoints/jquery.waypoints.min.js",
  "themes/assets/vendor/counterup/counterup.min.js",
  "themes/assets/vendor/isotope-layout/isotope.pkgd.min.js",
  "themes/assets/vendor/venobox/venobox.min.js",
  "themes/assets/vendor/owl.carousel/owl.carousel.min.js",
  "themes/assets/vendor/typed.js/typed.min.js",
  "themes/assets/vendor/aos/aos.js",
  "themes/assets/js/main.js",
  "themes/assets/vendor/jquery/jquery.min.js",
  "themes/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
  "themes/assets/vendor/jquery.easing/jquery.easing.min.js",
  "themes/assets/vendor/php-email-form/validate.js",
  "themes/assets/vendor/waypoints/jquery.waypoints.min.js",
  "themes/assets/vendor/counterup/counterup.min.js",
  "themes/assets/vendor/isotope-layout/isotope.pkgd.min.js",
  "themes/assets/vendor/venobox/venobox.min.js",
  "themes/assets/vendor/owl.carousel/owl.carousel.min.js",
  "themes/assets/vendor/typed.js/typed.min.js",
  "themes/assets/vendor/aos/aos.js",
  "themes/assets/js/main.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
