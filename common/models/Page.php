<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $image
 * @property int|null $status
 * @property int|null $crated_at
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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['status', 'crated_at', 'updated_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'crated_at' => 'Crated At',
            'updated_at' => 'Updated At',
        ];
    }
}
