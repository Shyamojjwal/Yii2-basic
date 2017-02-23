<?php

namespace app\models;

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
class UserMaster extends \yii\db\ActiveRecord {

    public $cnf_password;

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user_master';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['username', 'first_name', 'last_name', 'email', 'mobile', 'dob', 'password', 'auth_key', 'password', 'email'], 'required', 'on' => 'new-user-signup'],
            ['email', 'email', 'on' => 'new-user-signup'],
            ['cnf_password', 'compare', 'compareAttribute'=>'password', 'on' => 'new-user-signup'],
            
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
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'role' => 'Role',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'full_name' => 'Full Name',
            'auth_key' => 'Auth Key',
            'password' => 'Password',
            'cnf_password' => 'Retype Password',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'email_verified' => 'Email Verified',
            'mobile' => 'Mobile',
            'mob_verified' => 'Mob Verified',
            'dob' => 'Dob',
            'proImg' => 'Pro Img',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
