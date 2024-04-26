<?php

namespace common\models;

/**
 * This is the model class for table "banners".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $subtitle
 * @property string|null $url
 * @property string|null $path
 * @property string|null $filename
 * @property string|null $original_name
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banners';
    }

    public $image;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'subtitle', 'url', 'path', 'filename', 'original_name'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'maxSize' => 10485760],
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
            'subtitle' => 'Subtitle',
            'url' => 'Url',
            'path' => 'Path',
            'filename' => 'Filename',
            'original_name' => 'Original Name',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function uploadIntegration()
    {
        $base_directory = __DIR__ . '/../../frontend/web/files';
        $new_directory = $base_directory . '/' . 'integration';
        $file = $this->file;
        if ($file != null) {
            if (!is_dir($new_directory)) {
                mkdir($new_directory, 0777, true);
            }
            $filename = substr(sha1($file->baseName), 0, 20) . date("d-m-Y-H-i") . '.' . $file->extension;
            $file_dir = $new_directory . '/' . $filename;
            $file->saveAs($file_dir);
            return true;
        } else {
            return false;
        }
    }
}
