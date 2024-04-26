<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%galleries}}`.
 */
class m240423_073546_create_galleries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%galleries}}', [
            'id' => $this->primaryKey(),
            'type' => $this->integer()->notNull(),
            'is_external' => $this->integer(),
            'url' => $this->text()->null(),
            'path' => $this->string()->null(),
            'filename' => $this->string()->null(),
            'original_name' => $this->string()->null(),
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
        $this->dropTable('{{%galleries}}');
    }
}
