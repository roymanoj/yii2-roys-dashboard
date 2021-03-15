<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
//use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $cid
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $phone
 * @property int $status
 * @property int $usrlevel
 * @property string $created_at
 * @property string $updated_at
 * @property string $password write-only password
 * 
 *  @property Company $comp
 *
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    public static $password;
     
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    const ROLE_USER = 10;
    const ROLE_ADMIN = 20;
    const ROLE_SUPER_ADMIN=30;

    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

     /**
     * @inheritdoc
     */
   /* public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    } */


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
          return [
            [['cid', 'username', 'password_hash', 'email'], 'required'],
            [['cid', 'status', 'usrlevel'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['cid' => 'id']],  
            ['usrlevel', 'default', 'value' => self::ROLE_USER],
            ['usrlevel', 'in', 'range' => [self::ROLE_USER, self::ROLE_ADMIN, self::ROLE_SUPER_ADMIN]],
        ];
    }

    /*
    public function rules()
    {
          return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    } */

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        $session = Yii::$app->session;
     //   return ($session->has('user')) ? new static($session->get('user')) : null;
       return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

     /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['auth_key' => $token, 'status' => self::STATUS_ACTIVE]);
      //  throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    
     /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComp()
    {
        return $this->hasOne(Company::className(), ['id' => 'cid']);
    }

    public function getCompcode(){
        $model=$this->comp;
        return $model?$model->compcode:'';
    }

    public function getAppadmin(){
        if ($this->usrlevel==20 || $this->usrlevel==30)
            return true;
              
            return false;
    }

    public function getSuperadmin(){
        if ($this->usrlevel==30)
            return true;
              
            return false;
    }

  

     /**
     * @inheritdoc
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
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }



    //// Restting Password token

    public static function findByPasswordResetToken($token)
{
    if (!static::isPasswordResetTokenValid($token)) {
        return null;
    }
    return static::findOne([
        'password_reset_token' => $token,
        'status' => self::STATUS_ACTIVE,
    ]);
}

public static function isPasswordResetTokenValid($token)
{
    if (empty($token)) {
        return false;
    }
    $timestamp = (int) substr($token, strrpos($token, '_') + 1);
    $expire = Yii::$app->params['user.passwordResetTokenExpire'];
    return $timestamp + $expire >= time();
}

public function generatePasswordResetToken()
{
    $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
}

public function removePasswordResetToken()
{
    $this->password_reset_token = null;
}

public static function findByEmail($email)
{
    return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
}




    
}
