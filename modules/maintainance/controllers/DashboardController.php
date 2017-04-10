<?php

namespace app\modules\maintainance\controllers;

use app\components\BackendController;

/**
 * Default controller for the `maintainance` module
 */
class DashboardController extends BackendController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->view->title = $this->getProjectName() . ": Dashboard";
        return $this->render('index');
    }
}
