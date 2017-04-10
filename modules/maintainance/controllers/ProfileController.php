<?php

namespace app\modules\maintainance\controllers;

use app\components\BackendController;
use app\modules\maintainance\models\UserMaster;

/**
 * Default controller for the `maintainance` module
 */
class ProfileController extends BackendController {

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex() {
        $this->view->title = $this->getProjectName() . ": User Profile";
        $model = UserMaster::findOne(1);
        return $this->render('index', ['model' => $model]);
    }

}
