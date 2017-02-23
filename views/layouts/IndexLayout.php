<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\ForntendAssets\IndexAsset;

IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
        <?php $this->head() ?>
    </head>
    <body class="corporate">
        <?php $this->beginBody() ?>
        <?= $this->render('../partials/modals-page'); ?>
        <?= $this->render('../partials/header'); ?>
        <?= $this->render('../partials/slider'); ?>
        <div class="main">
            <div class="container">
                <?= $content ?>
            </div>
        </div>
        <?= $this->render('../partials/footer'); ?>
        <?php $this->endBody() ?>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                Layout.init();
                Layout.initOWL();
                RevosliderInit.initRevoSlider();
                Layout.initTwitter();
                Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
                Layout.initNavScrolling();
            });
        </script>
        <script>
            var full_path = <?= Yii::$app->request->baseUrl . '/'; ?>;
        </script>
    </body>
</html>
<?php $this->endPage() ?>
