<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%item}}".
 *
 * @property int $id
 * @property string $item_name
 * @property int $quantity
 * @property string $received_date
 * @property int $unity_price
 * @property int $total_price
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'quantity', 'unity_price', 'total_price'], 'required'],
            [['quantity', 'unity_price', 'total_price'], 'integer'],
            [['received_date'], 'safe'],
            [['item_name'], 'string', 'max' => 100],
            [['item_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_name' => Yii::t('app', 'Item Name'),
            'quantity' => Yii::t('app', 'Quantity'),
            'received_date' => Yii::t('app', 'Received Date'),
            'unity_price' => Yii::t('app', 'Unity Price'),
            'total_price' => Yii::t('app', 'Total Price'),
        ];
    }
}
