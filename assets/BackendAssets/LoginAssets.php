<?php
namespace app\assets\BackendAssets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LoginAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/global/plugins/font-awesome/css/font-awesome.min.css',
        'themes/global/plugins/bootstrap/css/bootstrap.min.css',        
        'themes/global/plugins/bootstrap-datepicker/css/datepicker.css',
        'themes/global/plugins/fancybox/source/jquery.fancybox.css',
        'themes/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css',
        'themes/global/css/components.css',
        'themes/frontend/assets/css/style.css',
        'themes/frontend/assets/css/style-revolution-slider.css',
        'themes/frontend/assets/css/style-responsive.css',
        'themes/frontend/assets/css/themes/red.css',
        'themes/frontend/assets/css/custom.css',
//        ============== custom css files ===========
        'themes/frontend/custom/css/custom.css',
    ];
    public $js = [
        'themes/global/plugins/jquery-migrate.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.min.js',
        'themes/frontend/assets/js/back-to-top.js',
        'themes/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js',
        'themes/global/plugins/fancybox/source/jquery.fancybox.pack.js',
        'themes/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js',
        'themes/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js',
        'themes/frontend/assets/js/revo-slider-init.js',
        'themes/frontend/assets/js/layout.js',
//        ============== custom JS files ===========
        'themes/frontend/custom/js/common.js',
        'themes/frontend/custom/js/signin-signup.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
