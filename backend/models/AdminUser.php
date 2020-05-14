<?php

namespace backend\models;

use Yii;
use yii\web\IdentityInterface;
 
/**
 * This is the model class for table "admin_user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $auth_key
 * @property string|null $email
 * @property string|null $access_token
 */
class AdminUser extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @var $TYPE
     */
    public const TYPE = 'ADMIN_USER';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username'], 'string', 'max' => 100],
            [['password', 'auth_key', 'email', 'access_token'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'access_token' => 'Access Token',
        ];
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) 
        {
            if ($this->isNewRecord) 
                $this->auth_key = Yii::$app->security->generateRandomString();
            return true;
        }
        return false;
    }
 
    /**
     * register an user
     * @param string $username
     * @param string $password
     * @param string $email
     */
    public function registerUser( $username, $password, $email )
    {
        $this->username = $username;
        $this->setPassword($password);
        $this->email = $email;
        return $this->insert();
    }

    /**
     * change email address
     * @param string $username
     * @param string $email
     * @return bool
     */
    public static function changeAdminEmailAddress($username, $email)
    {
        if(empty($email) || !isset($email)) 
            return false;
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) 
            return false;
        $model = self::findByUsername($username);
        $model->email = $email;
        return $model->update();
    }

    /**
     * change user password
     * @param string $current_password
     * @param string $new_password
     * @param string $retyped_password
     * @return bool
     */
    public function changeUserPassword($current_password, $new_password, $retyped_password )
    {
        if($new_password !== $retyped_password) 
            return false;
        $user = self::findByUsername(Yii::$app->user->identity->username);
        if(!$user || !$user->validatePassword($current_password)) 
            return false;
        $user->password = Yii::$app->security->generatePasswordHash($new_password);
        return $user->update();
    }
}
