<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $cid
 * @property string $username
 * @property string $password_hash
 * @property string $auth_key
 * @property string $password_reset_token
 * @property string $email
 * @property string $phone
 * @property int $status
 * @property int $usrlevel
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Rep $rep
 * @property Company $c
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'username', 'password_hash', 'auth_key', 'email'], 'required'],
            [['cid', 'status', 'usrlevel'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['cid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cid' => 'Cid',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'usrlevel' => 'Usrlevel',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRep()
    {
        return $this->hasOne(Rep::className(), ['uid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Company::className(), ['id' => 'cid']);
    }
}
