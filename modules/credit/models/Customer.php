<?php

namespace app\modules\credit\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property int $cid
 * @property int $areaid
 * @property string $customername
 * @property string $cusaddress
 * @property string $cuscity
 * @property string $cuspin
 * @property string $cusphone
 * @property double $cusdueamt
 * @property int $cusstatus
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Company $c
 * @property Area $area
 * @property Order[] $orders
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'cusdueamt'], 'required'],
            [['cid', 'areaid', 'cusstatus'], 'integer'],
            [['cusdueamt'], 'number'],
            [['updated_at', 'created_at'], 'safe'],
            [['customername', 'cusaddress'], 'string', 'max' => 255],
            [['cuscity'], 'string', 'max' => 30],
            [['cuspin'], 'string', 'max' => 6],
            [['cusphone'], 'string', 'max' => 25],
            [['cid'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['cid' => 'id']],
            [['areaid'], 'exist', 'skipOnError' => true, 'targetClass' => Area::className(), 'targetAttribute' => ['areaid' => 'id']],
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
            'areaid' => 'Areaid',
            'customername' => 'Customername',
            'cusaddress' => 'Cusaddress',
            'cuscity' => 'Cuscity',
            'cuspin' => 'Cuspin',
            'cusphone' => 'Cusphone',
            'cusdueamt' => 'Cusdueamt',
            'cusstatus' => 'Cusstatus',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getC()
    {
        return $this->hasOne(Company::className(), ['id' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::className(), ['id' => 'areaid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['cusid' => 'id']);
    }
}
