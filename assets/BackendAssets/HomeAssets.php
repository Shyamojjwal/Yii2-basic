<?php
namespace app\assets\BackendAssets;

use yii\web\AssetBundle;


class HomeAssets extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'themes/global/plugins/bootstrap/css/bootstrap.css',        
        'themes/global/plugins/node-waves/waves.css',        
        'themes/global/plugins/animate-css/animate.css',        
        'themes/global/plugins/morris/morris.css',        
        'themes/backend/assets/css/style.css',        
        'themes/backend/assets/css/themes/all-themes.css',        
//        ============== custom css files ===========
        'themes/backend/custom/css/dashboard.css',
    ];
    public $js = [
        'themes/global/plugins/jquery/jquery.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.js',
        'themes/global/plugins/bootstrap-select/bootstrap-select.js',
        'themes/global/plugins/jquery-slimscroll/jquery.slimscroll.js',
        'themes/global/plugins/node-waves/waves.js',
        'themes/global/plugins/jquery-countto/jquery.countTo.js',
        'themes/global/plugins/raphael/raphael.min.js',
        'themes/global/plugins/morris/morris.js',
        'themes/global/plugins/chartjs/Chart.bundle.js',
        'themes/global/plugins/jquery-sparkline/jquery.sparkline.js',
        'themes/backend/assets/js/admin.js',        
        'themes/backend/assets/js/demo.js',        
//        ============== custom JS files ===========
        'themes/backend/custom/js/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
