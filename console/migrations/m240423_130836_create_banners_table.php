<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%banners}}`.
 */
class m240423_130836_create_banners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%banners}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->null(),
            'subtitle' => $this->string()->null(),
            'url' => $this->string()->null(),
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
        $this->dropTable('{{%banners}}');
    }
}
