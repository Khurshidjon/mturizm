<?php

use common\models\Page;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var common\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
$pages = Page::find()->where(['is_list' => 1])->all();

?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postImage')->fileInput(['class' => 'form-control']) ?>

    <?= $form->field($model, 'content')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'ru',
    ]) ?>

    <div class="my-4 form-check form-switch">
        <?= $form->field($model, 'is_news')->checkbox(['class' => 'form-check-input']) ?>
    </div>

    <?= $form->field($model, 'page_id')->dropDownList(ArrayHelper::map($pages, 'id', 'title')) ?>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
