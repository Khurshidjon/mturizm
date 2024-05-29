<?php
/** @var $post \common\models\Post */
?>
<div class="container">
    <div class="pt-120 pb-30">
        <h1 class="fw-bold">
            <?= $post ? $post->title : null ?>
        </h1>
    </div>
    <div class="pb-30 text-center">
        <img src="<?= $post->image != null ? '/files/' . $post->image : null ?>"
             alt="" class="img-fluid" style="max-width: 500px; ">
    </div>
    <div class="pb-100">
        <?= $post ? $post->content : null ?>
    </div>
</div>
