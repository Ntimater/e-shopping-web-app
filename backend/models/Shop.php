<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%shop}}".
 *
 * @property int $id
 * @property string $shopname
 * @property string $shopowner
 * @property string $shopaddress
 * @property string $auth_key
 * @property string $email
 * @property string $phone_number
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%shop}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['shopname', 'shopowner', 'shopaddress', 'auth_key', 'email', 'phone_number'], 'required'],
            [['shopname', 'shopowner', 'shopaddress', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone_number'], 'string', 'max' => 12],
            [['shopname'], 'unique'],
            [['shopaddress'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shopname' => 'Shopname',
            'shopowner' => 'Shopowner',
            'shopaddress' => 'Shopaddress',
            'auth_key' => 'Auth Key',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
        ];
    }

    public function getShopItems(){

        return ShopItem::find()->where(['shop_id' => $this->id])->all();

    }
}
