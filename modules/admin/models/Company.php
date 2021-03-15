<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $companyname
 * @property string $comprintname
 * @property string $compcode
 * @property string $compaddress
 * @property string $compcity
 * @property string $comppin
 * @property string $compphone
 * @property string $compemail
 * @property string $compcontact
 * @property string $compgstin
 * @property int $compstatus
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Area[] $areas
 * @property Customer[] $customers
 * @property Order[] $orders
 * @property ProdGroup[] $prodGroups
 * @property Product[] $products
 * @property Rep[] $reps
 * @property User[] $users
 */
class Company extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';
    const SCENARIO_DELETE = 'delete';

    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 20;
    const STATUS_DELETE = 0;

            
    public $comuser;
    public $compass;
    public $comemail;
    public $comphone;

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
            [['companyname', 'comprintname', 'compaddress', 'compcontact'], 'string', 'max' => 255],
            [['compcode'], 'string', 'max' => 5],
            [['compcity'], 'string', 'max' => 30],
            [['comppin'], 'string', 'max' => 6],
            [['compphone'], 'string', 'max' => 25],
            [['compemail'], 'string', 'max' => 100],
            [['compgstin'], 'string', 'max' => 15],
            [['companyname'], 'unique'],
            [['comemail','compemail'], 'email'],
            [['comuser','compass','comemail','comphone'], 'required', 'on' => self::SCENARIO_CREATE],
            [['comuser','comemail','comphone'], 'required', 'on' => self::SCENARIO_UPDATE],

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
            'compstatus' => 'Compstatus',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'comuser'=>'Admin User',
            'compass'=>'Admin Password',
            'comemail'=>'Admin Email',
            'comphone'=>'Admin Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreas()
    {
        return $this->hasMany(Area::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdGroups()
    {
        return $this->hasMany(ProdGroup::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReps()
    {
        return $this->hasMany(Rep::className(), ['cid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['cid' => 'id']);
    }

    


}
