<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property int|null $is_list
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Page extends \yii\db\ActiveRecord
{

    public $cover_image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
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
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['is_list', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['cover_image'], 'file', 'skipOnEmpty' => true, 'maxSize' => 10485760],
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
            'content' => 'Content',
            'image' => 'Image',
            'is_list' => 'Sahifada ro\'yxat chiqadimi?',
            'status' => 'Status',
            'created_at' => 'Crated At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getPosts()
    {
        return $this->hasMany(Post::class, ['page_id' => 'id']);
    }
}
