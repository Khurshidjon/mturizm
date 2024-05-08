<?php

?>
<div class="container">
    <div class="pt-120 pb-60">
        <h2 class="fw-bold">
            <?= $lot ? $lot->title : null?>
        </h2>
    </div>
    <div class="pb-30 text-center">
        <img src="<?= $lot->image != null ? '/files/' . $lot->image : '/template/images/blog/b-1.png' ?>"
             alt="" class="img-fluid">
    </div>
    <div class="pb-100">
        <?= $lot ? $lot->content : null?>
    </div>
</div>
