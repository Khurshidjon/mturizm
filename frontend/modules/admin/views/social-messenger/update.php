<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SocialMessenger $model */

$this->title = 'Update Social Messenger: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Social Messengers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="social-messenger-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
