<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "menus".
 *
 * @property int $id
 * @property string $title
 * @property int|null $parent_id
 * @property int $is_external
 * @property string|null $url
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menus';
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
            [['title', 'is_external'], 'required'],
            [['is_external', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'url', 'order'], 'string', 'max' => 255],
            [['parent_id'], 'safe'],
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
            'parent_id' => 'Parent ID',
            'is_external' => 'Boshqa sayt uchun linkmi',
            'url' => 'Url',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSubMenu()
    {
        return $this->hasMany(Menu::class, ['parent_id' => 'id']);
    }
    public function getChildren()
    {
        return $this->hasMany(Menu::class, ['parent_id' => 'id'])->orderBy(['order' => SORT_ASC]);
    }
}
