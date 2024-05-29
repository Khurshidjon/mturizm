<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Post $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'title',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/files'.$model->image, [
                        'style' => 'width: 200px'
                    ]);
                }
            ],
            [
                'attribute' => 'content',
                'value' => function ($model) {
                    return $model->content;
                }
            ],
//            'user_id',
            'status',
            [
                'attribute' => 'created_at',
                'value' => function ($model) {
                    return date("d-m-Y H:i:s", $model->created_at);
                }
            ],
            [
                'attribute' => 'updated_at',
                'value' => function ($model) {
                    return date("d-m-Y H:i:s", $model->updated_at);
                }
            ]
        ],
    ]) ?>

</div>
