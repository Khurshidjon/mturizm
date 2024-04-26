<?php

use common\models\Gallery;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\GallerySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <div class="card">
        <div class="card-header">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>
                <?= Html::a('Create Gallery', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
        <div class="card-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'type',
                    'is_external',
                    'url:url',
                    'path',
                    //'filename',
                    //'original_name',
                    //'status',
                    //'created_at',
                    //'updated_at',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Gallery $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>

</div>
