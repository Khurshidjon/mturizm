<?php

/** @var yii\web\View $this */
/** @var \common\models\Banner $banners */
/** @var \common\models\Post $posts */

$this->title = 'Miroqi | Uzbekistan';
?>

<!-- ===============  Main banner area start =============== -->
<div class="main-banner">
    <div class="banner-slider owl-carousel">
        <?php foreach ($banners as $banner): ?>
            <div class="slider-item slider-item-1"
                 style="background: linear-gradient(rgba(47,46,46,0.45) 100%, rgba(32,40,40,0.45) 100%), url(/files/<?= $banner->path . '/' . $banner->filename ?>); background-size: cover; background-position: center">
                <div class="container">
                    <div class="slider-content wow fadeInLeft animated" data-wow-delay="300ms"
                         data-wow-duration="1500ms">
                        <h2><?= $banner->title ?></h2>
                        <h5><?= $banner->subtitle ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="find-form">
    <div class="container">
        <form class="findfrom-wrapper">
            <div class="row">
                <div class="col-lg-3">
                    <input type="text" name="whereto" placeholder="Qayerga...">
                </div>
                <div class="col-lg-3">
                    <div class="calendar-input">
                        <input type="text" name="check-in" class="input-field check-in" placeholder="kk-oo-yy">
                        <i class="flaticon-calendar"></i>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="custom-select">
                        <select>
                            <option value="0">Sayohat Turi</option>
                            <option value="1">City Tours</option>
                            <option value="2">Vacation Tours</option>
                            <option value="3">Couple Tours</option>
                            <option value="4">Adventure Tours</option>
                            <option value="5">Group Tours</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="find-btn">
                        <a href="#" class="btn-second"><i class='bx bx-search-alt'></i>Izlash</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- ===============  Main banner area end =============== -->


<!-- ===============  Package  area start =============== -->
<div class="review-area mt-120">
    <div class="container">
        <div class="package-area pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-head pb-45">
                            <h5>Turizm haqida yangiliklar</h5>
                            <h2>Miroqi dam olish maskani haqidagi so'nggi yangiliklar</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($posts as $post): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="<?= $post->image != null ? '/files/' . $post->image : '/template/images/blog/b-1.png' ?>"
                                         alt="" class="img-fluid">
                                    <div class="blog-date"><i class="flaticon-calendar"></i> <?= date("d M, Y", $post->created_at)?></div>
                                </div>
                                <div class="blog-details">
                                    <a href="blog-details.html" class="blog-title"><?= $post->title ?></a>
                                    <div class="blog-btn">
                                        <a href="#" class="btn-common-sm">Batafsil o'qish</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Package  area end =============== -->

<!-- =============== Destinations area start =============== -->
<div class="destinations-area pt-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-head pb-40">
                    <h5>Popular Destinations</h5>
                    <h2>Select Our Best Popular Destinations</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="package-slider-wrap">
                    <img src="/template/images/destination/d-1.png" alt="" class="img-fluid">
                    <div class="pakage-overlay">
                        <strong>Spain</strong>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row owl-carousel destinations-1">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-4.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$145</span>/Per Person</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Paris Hill Tour</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-5.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$240</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Lake Garda, Spain</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-6.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$300</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Mount Dtna, Spain</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-7.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$120</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Amalfi Costa, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="row owl-carousel destinations-2">
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-7.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$145</span>/Per Person</h5>
                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Amalfi Costa, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-8.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$240</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Fench Rivira, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-9.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$300</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Amalfi Costa, Italy</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                    <div class="package-card">
                        <div class="package-thumb">
                            <img src="/template/images/destination/d-10.png" alt="" class="img-fluid">
                        </div>
                        <div class="package-details">
                            <div class="package-info">
                                <h5><span>$120</span>/Per Person</h5>

                            </div>
                            <h3><i class="flaticon-arrival"></i>
                                <a href="package-details.html">Mount Dtna, Italyr</a>
                            </h3>
                            <div class="package-rating">
                                <i class='bx bxs-star'></i>
                                <strong><span>1.3K+</span> Rating</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="package-slider-wrap">
                    <img src="/template/images/destination/d-2.png" alt="" class="img-fluid">
                    <div class="pakage-overlay">
                        <strong>Italy</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =============== Destinations area end =============== -->

<!-- =============== achievement area start =============== -->
<div class="achievement-area mt-120">
    <div style="position:relative;overflow:hidden;">
        <a href="https://yandex.uz/maps/org/236557694293/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:22px;position:absolute;top:0px;">Санаторий Мираки</a>
        <a href="https://yandex.uz/maps/105807/qashqadaryo-province/category/sanatorium/184106404/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Санаторий в Кашкадарьинской области</a>
        <iframe src="https://yandex.uz/map-widget/v1/?ll=67.111664%2C39.039630&mode=search&oid=236557694293&ol=biz&z=13.26" width="100%" height="570" frameborder="0" allowfullscreen="true" style="position:relative;">
        </iframe>
    </div>
</div>
<!-- =============== achievement area end =============== -->

<!-- ===============  Feature area start =============== -->
<!--<div class="feature-area mt-120 p-80">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12">-->
<!--                <div class="section-head pb-60">-->
<!--                    <h5>Feature Tours</h5>-->
<!--                    <h2>See Our Best Popular Package</h2>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="feature-slider owl-carousel">-->
<!--                    <div class="feature-card">-->
<!--                        <div class="feature-img">-->
<!--                            <img src="/template/images/feature/f-1.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                        <div class="feature-content">-->
<!--                            <a href="package-details.html" class="title">Group Travel Go To Bea-->
<!--                                Amsterdam</a>-->
<!--                            <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>-->
<!--                            <strong>$150 <span>$200</span></strong>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feature-card">-->
<!--                        <div class="feature-img">-->
<!--                            <img src="/template/images/feature/f-2.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                        <div class="feature-content">-->
<!--                            <a href="package-details.html" class="title">Group Travel Go To Bea-->
<!--                                Amsterdam</a>-->
<!--                            <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>-->
<!--                            <strong>$150 <span>$200</span></strong>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feature-card">-->
<!--                        <div class="feature-img">-->
<!--                            <img src="/template/images/feature/f-1.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                        <div class="feature-content">-->
<!--                            <a href="package-details.html" class="title">Group Travel Go To Bea-->
<!--                                Amsterdam</a>-->
<!--                            <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>-->
<!--                            <strong>$150 <span>$200</span></strong>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feature-card">-->
<!--                        <div class="feature-img">-->
<!--                            <img src="/template/images/feature/f-2.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                        <div class="feature-content">-->
<!--                            <a href="package-details.html" class="title">Group Travel Go To Bea-->
<!--                                Amsterdam</a>-->
<!--                            <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>-->
<!--                            <strong>$150 <span>$200</span></strong>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="feature-card">-->
<!--                        <div class="feature-img">-->
<!--                            <img src="/template/images/feature/f-1.png" alt="" class="img-fluid">-->
<!--                        </div>-->
<!--                        <div class="feature-content">-->
<!--                            <a href="package-details.html" class="title">Group Travel Go To Bea-->
<!--                                Amsterdam</a>-->
<!--                            <h5><i class='bx bxs-star'></i><span> 7K+</span>Rating</h5>-->
<!--                            <strong>$150 <span>$200</span></strong>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- ===============  Feature area start =============== -->

<!-- ===============  Blog area start =============== -->
<div class="blog-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-head pb-30">
                    <h5>Latest Blog</h5>
                    <h2>Stay Updated And new post our Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                 data-wow-delay="0ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="/template/images/blog/b-1.png" alt="" class="img-fluid">
                        <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                    </div>
                    <div class="blog-details">
                        <div class="blog-info">
                            <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                            <a class="blog-comment" href="#"><i class="flaticon-comment"></i><span>(3)</span>Comment</a>
                        </div>
                        <a href="blog-details.html" class="blog-title">Donec egestas orci viverra
                            fermentum risus.</a>
                        <div class="blog-btn">
                            <a href="blog-details.html" class="btn-common-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6  wow fadeInLeft animated" data-wow-duration="1500ms"
                 data-wow-delay="300ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="/template/images/blog/b-2.png" alt="" class="img-fluid">
                        <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                    </div>
                    <div class="blog-details">
                        <div class="blog-info">
                            <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                            <a class="blog-comment" href="#"><i class="flaticon-comment"></i><span>(3)</span>Comment</a>
                        </div>
                        <a href="blog-details.html" class="blog-title">Praesent ut mattis ante the Nullam lobortis. </a>
                        <div class="blog-btn">
                            <a href="blog-details.html" class="btn-common-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft animated" data-wow-duration="1500ms"
                 data-wow-delay="600ms">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="/template/images/blog/b-3.png" alt="" class="img-fluid">
                        <div class="blog-date"><i class="flaticon-calendar"></i> 1 April, 2021</div>
                    </div>
                    <div class="blog-details">
                        <div class="blog-info">
                            <a class="blog-writer" href="#"><i class="flaticon-user"></i>Dina Jems</a>
                            <a class="blog-comment" href="#"><i class="flaticon-comment"></i><span>(3)</span>Comment</a>
                        </div>
                        <a href="blog-details.html" class="blog-title">Maecenas vehicula risus non neque tincidunt.</a>
                        <div class="blog-btn">
                            <a href="blog-details.html" class="btn-common-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Blog area end =============== -->


<!-- ===============  Newsletter area start =============== -->
<div class="newsletter-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="newsletter-wrapper">
                    <h2>Subscribe To Our Newsletter
                        For Latest Update</h2>

                    <form>
                        <div class="input-group newsletter-input">
                            <input type="text" class="form-control" placeholder="Enter Your Email"
                                   aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===============  Newsletter area end =============== -->
