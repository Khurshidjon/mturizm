<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 * @property string|null $content
 * @property int|null $user_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    public $postImage;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'page_id'], 'required'],
            [['is_news', 'page_id', 'user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['postImage'], 'file', 'skipOnEmpty' => true, 'maxSize' => 10485760],
        ];
    }


    public function behaviors()
    {
        return [
            TimestampBehavior::class,
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
            'image' => 'Image',
            'content' => 'Content',
            'user_id' => 'User ID',
            'is_news' => 'Yangiliklar lentasida chiqsinimi?',
            'page_id' => 'Qaysi sahifada chiqsin?',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
