<?php

if (Yii::$app->controller->id == 'auth') {
    $this->layout = "@app/modules/maintainance/views/layouts/login-layout";
} elseif (Yii::$app->controller->id == 'dashboard') {
    $this->layout = "@app/modules/maintainance/views/layouts/dashboard-layout";
} else {
    $this->layout = "@app/modules/maintainance/views/layouts/main-layout";
}