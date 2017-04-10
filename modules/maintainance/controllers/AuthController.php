<?php

namespace app\modules\maintainance\controllers;

use app\components\BackendController;

/**
 * Default controller for the `maintainance` module
 */
class AuthController extends BackendController {

    public function actionIndex(){
        $this->view->title = $this->getProjectName() . ": Login";
        return $this->render('index');
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->adminUrl('auth/');
    }

}
