<?php

use common\models\Page;

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

/** @var Page $page */

function truncate($string, $length, $dots = "...") {
    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}
?>
<div class="container-fluid">

    <div class="container">
        <div class="pt-120 pb-60">
            <h1 class="fw-bold">
                <?= $page ? $page->title : null ?>
            </h1>
        </div>
        <div class="pb-100">
            <?php if ($page): ?>
                <?php if ($page->is_list != 1): ?>
                    <?= $page->content ?>
                <?php else: ?>
                    <?php foreach ($page->posts as $key => $post): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6  wow fadeInLeft animated" data-wow-duration="1500ms"
                             data-wow-delay="<?= $key + 300 ?>ms">
                            <div class="blog-card">
                                <div class="blog-img" style="max-height: 200px">
                                    <?php if ($post->image != null): ?>
                                        <img src="/files/<?= $post->image ?>" alt="" class="img-fluid">
                                    <?php else: ?>
                                        <div style="padding: 20px 0"></div>
                                    <?php endif; ?>
                                    <div class="blog-date"><i
                                                class="flaticon-calendar"></i> <?= date("d M, Y", $post->created_at) ?>
                                    </div>
                                </div>
                                <div class="blog-details">
                                    <div><?= \yii\helpers\Html::a($post->title, ['post-details', 'id' => $post->id], ['class' => 'blog-title']) ?></div>
                                    <div>
                                        <?= truncate($post->content, 100) ?>
                                    </div>
                                    <div class="blog-btn py-3">
                                        <?= \yii\helpers\Html::a("Batafsil ko'rish", ['post-details', 'id' => $post->id], ['class' => 'btn-common-sm']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
