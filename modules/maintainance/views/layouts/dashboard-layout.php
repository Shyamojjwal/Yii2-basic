<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\BackendAssets\DashboardAssets;

DashboardAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <?php $this->head() ?>
    </head>
    <body class="theme-red">
        <?php $this->beginBody() ?>
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <?= $this->render('../menu/header-menu'); ?>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <?= $this->render('../menu/left-menu'); ?>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <?= $this->render('../menu/right-menu'); ?>
            <!-- #END# Right Sidebar -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <?= $content ?>
            </div>
        </section>
        <?php $this->endBody() ?>
        <script type="text/javascript">
            $('#yii-debug-toolbar').remove();
        </script>
    </body>
</html>
<?php $this->endPage() ?>
