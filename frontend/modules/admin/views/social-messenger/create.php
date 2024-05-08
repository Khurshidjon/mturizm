<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\SocialMessenger $model */

$this->title = 'Create Social Messenger';
$this->params['breadcrumbs'][] = ['label' => 'Social Messengers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-messenger-create">

    <div class="card">
        <div class="card-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="card-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>

</div>
