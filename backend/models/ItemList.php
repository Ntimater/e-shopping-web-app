<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%item}}".
 *
 * @property int $id
 * @property string $itemlist_name
 * @property int $quantity
 * @property string $received_date
 * @property int $unity_price
 * @property int $total_price
 */
class ItemList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%itemlist}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name','shop_name']]

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
            'shop_name' => Yii::t('app', 'Shop Name'),
            
        ];
    }
}
