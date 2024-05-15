<?php

?>
<div class="container">
    <div class="pt-120 pb-60">
        <h1 class="fw-bold">
            <?= $post ? $post->title : null?>
        </h1>
    </div>
    <div class="pb-30 text-center">
        <img src="<?= $post->image != null ? '/files/' . $post->image : '/template/images/blog/b-1.png' ?>"
             alt="" class="img-fluid">
    </div>
    <div class="pb-100">
        <?= $post ? $post->content : null?>
    </div>
</div>
