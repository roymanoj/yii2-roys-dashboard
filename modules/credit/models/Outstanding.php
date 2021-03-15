<?php

namespace app\modules\credit\models;

use Yii;

/**
 * This is the model class for table "outstanding".
 *
 * @property int $id
 * @property int $cid
 * @property int $cusid
 * @property string $billdate
 * @property string $billnumber
 * @property double $billamt
 * @property double $paidamt
 * @property int $status
 * @property string $updated_at
 * @property string $created_at
 */
class Outstanding extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outstanding';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cid', 'cusid', 'billdate', 'billnumber'], 'required'],
            [['cid', 'cusid', 'status'], 'integer'],
            [['billdate', 'updated_at', 'created_at'], 'safe'],
            [['billamt', 'paidamt'], 'number'],
            [['billnumber'], 'string', 'max' => 255],
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
            'cusid' => 'Cusid',
            'billdate' => 'Billdate',
            'billnumber' => 'Billnumber',
            'billamt' => 'Billamt',
            'paidamt' => 'Paidamt',
            'status' => 'Status',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
