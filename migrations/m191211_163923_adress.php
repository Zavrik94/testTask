<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m191211_163923_adress
 */
class m191211_163923_adress extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('adress', [
            'id' => Schema::TYPE_UPK,
            'user_id' => Schema::TYPE_INTEGER,
            'index' => Schema::TYPE_STRING,
            'country' => Schema::TYPE_STRING,
            'city' => Schema::TYPE_STRING,
            'street' => Schema::TYPE_STRING,
            'house_number' => Schema::TYPE_INTEGER,
            'flat_number' => Schema::TYPE_INTEGER
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191211_163923_adress cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191211_163923_adress cannot be reverted.\n";

        return false;
    }
    */
}
