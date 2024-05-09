<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-view">

  <div class="card">
      <div class="card-header">
          <h1><?= Html::encode($this->title) ?></h1>

          <p>
              <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
              <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
              <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                  'class' => 'btn btn-danger',
                  'data' => [
                      'confirm' => 'Are you sure you want to delete this item?',
                      'method' => 'post',
                  ],
              ]) ?>
          </p>
      </div>
      <div class="card-body">
          <?= DetailView::widget([
              'model' => $model,
              'attributes' => [
                  'id',
                  'title',
                  'parent_id',
                  'is_external',
                  'url:url',
                  'status',
                  'created_at',
                  'updated_at',
              ],
          ]) ?>
      </div>
  </div>

</div>
