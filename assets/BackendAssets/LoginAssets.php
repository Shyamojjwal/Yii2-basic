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
        'themes/global/plugins/bootstrap/css/bootstrap.css',        
        'themes/global/plugins/node-waves/waves.css',        
        'themes/global/plugins/animate-css/animate.css',       
        'themes/backend/assets/css/style.css', 
//        ============== custom css files ===========
        'themes/backend/custom/css/login.css',
    ];
    public $js = [
        'themes/global/plugins/jquery/jquery.min.js',
        'themes/global/plugins/bootstrap/js/bootstrap.js',
        'themes/global/plugins/node-waves/waves.js',
        'themes/backend/assets/js/admin.js',        
//        ============== custom JS files ===========
        'themes/backend/custom/js/login.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
