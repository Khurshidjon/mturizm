<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lots}}`.
 */
class m240423_124108_create_lots_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lots}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->text()->null(),
            'content' => $this->text()->null(),
            'status' => $this->integer()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lots}}');
    }
}
