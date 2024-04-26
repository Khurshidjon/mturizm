<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "galleries".
 *
 * @property int $id
 * @property int $type
 * @property int|null $is_external
 * @property int|null $url
 * @property string|null $path
 * @property string|null $filename
 * @property string|null $original_name
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galleries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type', 'is_external', 'url', 'status', 'created_at', 'updated_at'], 'integer'],
            [['path', 'filename', 'original_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'is_external' => 'Is External',
            'url' => 'Url',
            'path' => 'Path',
            'filename' => 'Filename',
            'original_name' => 'Original Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
