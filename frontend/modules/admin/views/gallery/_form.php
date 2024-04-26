<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Gallery;

/** @var yii\web\View $this */
/** @var common\models\Gallery $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->dropDownList(Gallery::fileType(), [
            'prompt' => '-- Galleriya turini tanlang --'
    ]) ?>

    <div class="form-check form-switch mt-3">
        <?= $form->field($model, 'is_external')->checkbox(['class' => 'form-check-input', 'checked' => false]) ?>
    </div>

    <div class="url-box d-none">
        <?= $form->field($model, 'url')->textInput() ?>
    </div>

    <div class="upload-box">
        <?= $form->field($model, 'file')->fileInput(['class' => 'form-control']) ?>
    </div>

    <div class="form-group mt-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$js = <<<JS
    $("#gallery-is_external").on("change", function(e) {
        var thisElement = $(this);
        if ($('#gallery-is_external').is(":checked")) {
          $(".url-box").removeClass('d-none');
          $(".upload-box").addClass('d-none');
        } else {
            $(".url-box").addClass('d-none');
            $(".upload-box").removeClass('d-none');
        }
    });
JS;
$this->registerJs($js, \yii\web\View::POS_LOAD);
?>