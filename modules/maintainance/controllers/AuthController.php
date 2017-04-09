<?php

namespace app\modules\maintainance\controllers;

use app\components\BackendController;

/**
 * Default controller for the `maintainance` module
 */
class AuthController extends BackendController {

    public function actionIndex(){
        return $this->render('index');
    }

}
