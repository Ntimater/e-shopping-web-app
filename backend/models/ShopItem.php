<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%shop_item}}".
 *
 * @property int $id
 * @property int $shop_id
 * @property string $item_name
 * @property int $quantity
 * @property string $received_date
 * @property string $sold_date
 * @property int $unity_price
 * @property int $total_price
 * @property string $status
 * @property string $shop_name
 * @property string $email
 *
 * @property Shop $shop
 */
class ShopItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shop_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shop_id', 'quantity', 'unity_price', 'total_price'], 'integer'],
            [['item_name', 'quantity', 'unity_price', 'total_price', 'status', 'shop_name', 'email'], 'required'],
            [['received_date', 'sold_date'], 'safe'],
            [['item_name', 'shop_name', 'email'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 10],
            [['item_name'], 'unique'],
            [['email'], 'unique'],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'shop_id' => Yii::t('app', 'Shop ID'),
            'item_name' => Yii::t('app', 'Item Name'),
            'quantity' => Yii::t('app', 'Quantity'),
            'received_date' => Yii::t('app', 'Received Date'),
            'sold_date' => Yii::t('app', 'Sold Date'),
            'unity_price' => Yii::t('app', 'Unity Price'),
            'total_price' => Yii::t('app', 'Total Price'),
            'status' => Yii::t('app', 'Status'),
            'shop_name' => Yii::t('app', 'Shop Name'),
            'email' => Yii::t('app', 'Email'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }
}
