<div class="gallary-wrapper pt-120">
    <div class="container">
        <div class="row">
            <?php foreach ($videos as $video): ?>
                <div class="col-lg-6">
                    <div class="gallary-colom-one">
                        <div class="gallary-grid">
                            <?php if ($video->is_external == 0): ?>
                                <a class="img-sm-1 main-gallary"
                                   href="/files/<?= $video->path . '/' . $video->filename ?>">
                                    <img src="/files/<?= $video->path . '/' . $video->filename ?>" alt="gallary-img">
                                </a>
                            <?php else: ?>
                                <?= $video->url ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>