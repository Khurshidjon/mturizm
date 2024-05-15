<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Menu;

/** @var yii\web\View $this */
/** @var common\models\Menu $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'parent_id')->dropDownList([
                'prompt' => '-- menu parentini tanlang --',
                'Parentlar' => ArrayHelper::map(Menu::find()->where('status=1')->where(['parent_id' => 0])->all(), 'id', 'title')
            ]); ?>
        </div>
    </div>

    <div class="my-3">
        <?= $form->field($model, 'is_external')->checkbox() ?>
    </div>

   <div class="row">
       <div class="col-md-6">
           <?= $form->field($model, 'url')->textInput(['maxlength' => true, 'placeholder' => '/page/1']); ?>
       </div>
       <div class="col-md-6">
           <div class="my-4 form-check form-switch">
               <?= $form->field($model, 'status')->checkbox(['class' => 'form-check-input']) ?>
           </div>
       </div>
   </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
