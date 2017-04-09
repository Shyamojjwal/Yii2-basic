<?php

namespace app\modules\maintainance\controllers;

use app\components\BackendController;

/**
 * Default controller for the `maintainance` module
 */
class DefaultController extends BackendController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
