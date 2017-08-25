<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m170822_060943_create_item_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('item',[
            'id' => $this->primaryKey(),
            'item_name' => $this->string(100)->unique()->notNull(),
            'quantity'=> $this->integer(100)->notNull(),
            'received_date'=> $this->dateTime(datefmt_set_timezone()),
            'unity_price'=> $this->integer(12)->notNull(),
            'total_price'=> $this->integer(100) ->notNull(),
            'status' => $this->string(10)->notNull()->defaultValue(Available),
            'shop_name' => $this->string("100")->notNull(),
            'email'=> $this->string(100)->unique()->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('item');
    }
}
