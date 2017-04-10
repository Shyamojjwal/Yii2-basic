<?php

namespace app\modules\maintainance\models;

use Yii;

/**
 * This is the model class for table "user_master".
 *
 * @property integer $id
 * @property string $username
 * @property integer $role
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $auth_key
 * @property string $password
 * @property string $password_reset_token
 * @property string $email
 * @property integer $email_verified
 * @property string $mobile
 * @property integer $mob_verified
 * @property string $dob
 * @property string $proImg
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class UserMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password', 'email'], 'required'],
            [['role', 'email_verified', 'mobile', 'mob_verified', 'status'], 'integer'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['username', 'password', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['first_name', 'last_name', 'full_name', 'proImg'], 'string', 'max' => 250],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'role' => Yii::t('app', 'Role'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'full_name' => Yii::t('app', 'Full Name'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'password' => Yii::t('app', 'Password'),
            'password_reset_token' => Yii::t('app', 'Password Reset Token'),
            'email' => Yii::t('app', 'Email'),
            'email_verified' => Yii::t('app', 'Email Verified'),
            'mobile' => Yii::t('app', 'Mobile'),
            'mob_verified' => Yii::t('app', 'Mob Verified'),
            'dob' => Yii::t('app', 'Dob'),
            'proImg' => Yii::t('app', 'Pro Img'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }
}
