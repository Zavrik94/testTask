<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m191211_163923_adress
 */
class m191211_163923_address extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('address', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'index' =>  $this->string(),
            'country' =>  $this->string(),
            'city' =>  $this->string(),
            'street' =>  $this->string(),
            'house_number' =>  $this->integer(),
            'flat_number' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('address');
    }
}
