<?php

namespace app\components;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class BackendController extends Controller {

    public function beforeAction($action) {
//        ====== set backend layout setting ===============
        require_once 'themes-management.php';
//        ====== end set backend layout setting ===============
        return parent::beforeAction($action);
    }

    public function getProjectName() {
        return ucwords('Yii2-Basic');
    }

    public function adminUrl($url = '') {
        return Yii::$app->urlManager->createAbsoluteUrl('/maintainance/') . $url;
    }

    public function getSiteLogoImg($imgPath) {
        $image = Yii::$app->request->baseUrl . '/themes/images/site-logo/' . $imgPath;
        return $image;
    }

    public function getSiteSocialImg($imgPath) {
        $image = Yii::$app->request->baseUrl . '/themes/images/social-img/' . $imgPath;
        return $image;
    }

    public function getStaticImages($imgPath) {
        $image = Yii::$app->request->baseUrl . '/themes/backend/assets/images/' . $imgPath;
        return $image;
    }

    public function getUserProfileImg($id = '') {
        $image = Yii::$app->request->baseUrl . '/themes/images/pro-static-img/default.jpg';
        return $image;
    }

    private function getUniqueKey($length = 5) {
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($str);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $str[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getActivateToken() {
        $un = 'UI-' . $this->getUniqueKey();
        $chec = \app\models\UserMaster::find()->where('username= :username AND status != :status', array(':username' => $un, ':status' => 3));
        if (count($chec) > 0) {
            $this->getActivateToken();
        }
        return $un;
    }

}
