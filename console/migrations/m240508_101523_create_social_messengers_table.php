<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%social_messengers}}`.
 */
class m240508_101523_create_social_messengers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%social_messengers}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'link' => $this->string(),
            'status' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%social_messengers}}');
    }
}
