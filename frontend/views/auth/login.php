<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Тизимга кириш';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="/" class="app-brand-link gap-2">
                                  <span class="app-brand-logo demo">
                                    <?= Html::img('/src_admin/img/system2.jpg', [
                                            'style' => 'width: 200px'
                                    ]);?>
                                  </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                            <div class="mb-3">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Фойдаланувчи логинини киритинг']) ?>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <?=
                                $form->field($model, 'password', [
                                    'inputTemplate' => '<label class="form-label" for="password">Парол</label>
                                     <div class="input-group input-group-merge">
                                     {input}
                                     <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                     </div>',
                                ])->passwordInput()->input('password', [
                                    'placeholder' => "•••••••••••••",
                                ])->label(false);
                                ?>
                            </div>
                            <div class="mb-3">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                            <div class="mb-3">
                                <?= Html::submitButton('Кириш', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                    </div>
                </div>
                <!-- /Register -->
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
