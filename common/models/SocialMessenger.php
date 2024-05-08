<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "social_messengers".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $link
 * @property string|null $status
 */
class SocialMessenger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_messengers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'link', 'status'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'status' => 'Status',
        ];
    }
}
