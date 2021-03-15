<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string|null $companyname
 * @property string|null $comprintname
 * @property string|null $compcode
 * @property string|null $compaddress
 * @property string|null $compcity
 * @property string|null $comppin
 * @property string|null $compphone
 * @property string|null $compemail
 * @property string|null $compcontact
 * @property string|null $compgstin
 * @property string|null $image
 * @property int|null $compstatus
 * @property string|null $updated_at
 * @property string|null $created_at
 *
 * @property Rep[] $reps
 * @property User[] $users
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['compstatus'], 'integer'],
            [['updated_at', 'created_at'], 'safe'],
            [['companyname', 'comprintname', 'compaddress', 'compcontact', 'image'], 'string', 'max' => 255],
            [['compcode'], 'string', 'max' => 5],
            [['compcity'], 'string', 'max' => 30],
            [['comppin'], 'string', 'max' => 6],
            [['compphone'], 'string', 'max' => 25],
            [['compemail'], 'string', 'max' => 100],
            [['compgstin'], 'string', 'max' => 15],
            [['companyname'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'companyname' => 'Companyname',
            'comprintname' => 'Comprintname',
            'compcode' => 'Compcode',
            'compaddress' => 'Compaddress',
            'compcity' => 'Compcity',
            'comppin' => 'Comppin',
            'compphone' => 'Compphone',
            'compemail' => 'Compemail',
            'compcontact' => 'Compcontact',
            'compgstin' => 'Compgstin',
            'image' => 'Image',
            'compstatus' => 'Compstatus',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Reps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReps()
    {
        return $this->hasMany(Rep::className(), ['cid' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['cid' => 'id']);
    }
}
