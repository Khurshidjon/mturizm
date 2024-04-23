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
