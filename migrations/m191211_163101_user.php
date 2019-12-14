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
            'id' => $this->primaryKey(),
            'login' =>  $this->string()->unique(),
            'password' =>  $this->string(),
            'name' =>  $this->string(),
            'surname' =>  $this->string(),
            'sex' =>  $this->string(),
            'create_date' => $this->timestamp(),
            'email' =>  $this->string()->unique()
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
