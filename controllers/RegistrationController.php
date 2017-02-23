<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\UserMaster;
use app\models\ContactForm;
use app\components\FrontendController;

class RegistrationController extends FrontendController {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionSignup() {
        $model = new UserMaster;
        $model->scenario = "new-user-signup";
        if ($model->load(Yii::$app->request->post())) {
            $model->attributes = $_POST['UserMaster'];
            $model->role = 2;
            $model->full_name = $model->first_name . ' ' . $model->last_name;
            $model->password = Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = $this->getActivateToken();
            $model->email_verified = 0;
            $model->mob_verified = 0;
            $model->status = 0;
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash("success-msg", "You are successfully signup on " . $this->getProjectName());
                return $this->redirect(['sucesspage']);
            }
        }
        return $this->render('signup', ['model' => $model]);
    }

}
