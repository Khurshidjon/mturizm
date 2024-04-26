<div class="gallary-wrapper pt-120">
    <div class="container">
        <div class="row">
            <?php foreach ($photos as $photo): ?>
                <div class="col-lg-6">
                    <div class="gallary-colom-one">
                        <div class="gallary-grid">
                            <?php if ($photo->is_external == 0): ?>
                                <a class="img-sm-1 main-gallary"
                                   href="/files/<?= $photo->path . '/' . $photo->filename ?>">
                                    <img src="/files/<?= $photo->path . '/' . $photo->filename ?>" alt="gallary-img">
                                </a>
                            <?php else: ?>
                                <a class="img-sm-1 main-gallary" href="<?= $photo->url ?>">
                                    <img src="<?= $photo->url ?>" alt="gallary-img">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>