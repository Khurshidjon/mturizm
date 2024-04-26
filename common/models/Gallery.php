<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

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


    const TYPE_1 = 1;
    const TYPE_2 = 2;

    public static function fileType($index = null)
    {
        $result = [
            self::TYPE_1 => "Foto galleriya uchun",
            self::TYPE_2 => "Video galleriya uchun",
        ];

        return $index != null ? $result[$index] : $result;
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galleries';
    }

    public $file;

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
            [['type'], 'required'],
            [['type', 'is_external', 'status', 'created_at', 'updated_at'], 'integer'],
            [['url'], 'string'],
            [['path', 'filename', 'original_name'], 'string', 'max' => 255],
            [['file'], 'file', 'skipOnEmpty' => true, 'maxSize' => 10485760],
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
            'is_external' => 'Tashqi manbaadan url orqali yuklanadimi?',
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
