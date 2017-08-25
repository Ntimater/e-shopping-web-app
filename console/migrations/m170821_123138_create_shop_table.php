<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shop`.
 */
class m170821_123138_create_shop_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('shop', [
            'id' => $this->primaryKey(),
            'shop_name' => $this->string()->notNull()->unique(),
            'shop_owner' => $this->string()->notNull(),
            'shopa_ddress' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'phone_number'=> $this->string(12)->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('shop');
    }
}
