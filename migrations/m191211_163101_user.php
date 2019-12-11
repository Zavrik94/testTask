<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m191211_163101_user
 */
class m191211_163101_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id' => Schema::TYPE_UPK,
            'login' => Schema::TYPE_STRING,
            'password' => Schema::TYPE_STRING,
            'name' => Schema::TYPE_STRING,
            'surname' => Schema::TYPE_STRING,
            'sex' => Schema::TYPE_STRING,
            'create_date' => Schema::TYPE_TIMESTAMP,
            'email' => Schema::TYPE_STRING
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
