<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop_item`.
 */
class m170823_003924_create_shop_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('shop_item',[
                'id' => $this->primaryKey(),
                'shop_id' => $this->integer(100),
                'item_name' => $this->string(100)->unique()->notNull(),
                'quantity'=> $this->integer(100)->notNull(),
                'received_date'=> $this->dateTime('Y-m-d H:i'),
                'sold_date'=> $this->dateTime('Y-m-d H:i'),
                'unity_price'=> $this->integer(12)->notNull(),
                'total_price'=> $this->integer(100) ->notNull(),
                'status' => $this->string(10)->notNull(),
                'shop_name' => $this->string("100")->notNull(),
                'email'=> $this->string(100)->unique()->notNull()
            ]
        );
        // add foreign key for table `user`
        $this->addForeignKey
        (
            'fk-shoo_item-shop_id',
            'shop_item',
            'shop_id',
            'shop',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `user`

        $this->dropForeignKey
        (
            'fk-shop_item-shop_id',
            'shop_item');

        $this->dropTable('shop_item');


    }
}

