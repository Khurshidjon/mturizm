<?php
use common\models\Page;

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */
/** @var Page $page */

use yii\helpers\Html;
?>
<div class="container-fluid">

    <div class="container">
        <div class="pt-120 pb-60">
            <h2 class="fw-bold">
                <?= $page ? $page->title : null?>
            </h2>
        </div>
        <div class="pb-100">
            <?= $page ? $page->content : null?>
        </div>
    </div>
</div>
