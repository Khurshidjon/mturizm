<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card">
    <div class="card-header">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('Create Menu', ['create'], ['class' => 'btn btn-success']) ?>
        </p>

        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Parent</th>
                <th>Children</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dataProvider->query->all() as $keyModel => $model): ?>
                <tr>
                    <td>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="my-auto"><?= $model->title ?></p>
                            </div>
                            <div class="col-md-6">
                                <?php if ($keyModel != 0): ?>
                                    <div class="my-1">
                                        <button type="button" data-id="<?=$model->id?>" class="btn btn-sm btn-success sort_up-button">
                                            <i class='bx bx-up-arrow-alt'></i>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <?php if (++$keyModel !== count($dataProvider->query->all())): ?>
                                    <div class="my-1">
                                        <button type="button" data-id="<?=$model->id?>" class="btn btn-sm btn-danger sort_down-button">
                                            <i class='bx bx-down-arrow-alt'></i>
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="">
                            <?php foreach ($model->children as $key => $child): ?>
                                <?php if ($key != 0): ?>
                                    <hr>
                                <?php endif; ?>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <p class="my-auto"><?= $child->title ?></p>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if ($key != 0): ?>
                                            <div class="my-1">
                                                <button type="button" data-id="<?=$child->id?>" class="btn btn-sm btn-success sort_up-button">
                                                    <i class='bx bx-up-arrow-alt'></i>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (++$key !== count($model->children)): ?>
                                            <div class="my-1">
                                                <button type="button" data-id="<?=$child->id?>" class="btn btn-sm btn-danger sort_down-button">
                                                    <i class='bx bx-down-arrow-alt'></i>
                                                </button>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </td>
                    <td>
                        <?= Html::a('ko\'rish', ['view', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']); ?>
                        <?= Html::a('tahrirlash', ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-success']); ?>
                        <?= Html::a('o\'chirish', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-sm btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$orderUrl = Url::toRoute(['order-change']);
$js = <<<JS
    $(".sort_down-button").on("click", function (){
        var id = $(this).data('id'); 
        $.ajax({
            url: "$orderUrl",
            type: "POST",
            data: {
                id: id,
                type: 'down'
            },
            success: (res) => {
                location.reload();
                console.log(res)
            }
        })
    })
    $(".sort_up-button").on("click", function (){
        var id = $(this).data('id');
        $.ajax({
            url: "$orderUrl",
            type: "POST",
            data: {
                id: id,
                type: 'up'
            },
            success: (res) => {
                location.reload();
                console.log(res)
            }
        })
    })
JS;
$this->registerJs($js, \yii\web\View::POS_LOAD);
?>
