<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAsset;
use common\models\SocialMessenger;
use common\models\Menu;

AppAsset::register($this);

$socials = SocialMessenger::find()->all();
$menus = Menu::find()->where(['status' => 1, 'parent_id' => 0])->orderBy(['order' => SORT_ASC])->all();
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title>“Shahrisabz” turistik markazi</title>
        <!--        <title>--><?php //= Html::encode($this->title) ?><!--</title>-->
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader loader1">
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <div class="rocket"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- =============== Topbar area start =============== -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 tob-contact-row">
                    <div class="topbar-contact">
                        <ul>
                            <li><i class='bx bxs-phone'></i><a href="tel:+17632275032">+998 (99)-000-5795</a></li>
                            <li><i class='bx bxs-envelope'></i><a href="mailto:info@mturizm.uz">info@mturizm.uz</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6">
                    <div class="topbar-social">
                        <ul>
                            <?php foreach ($socials as $social): ?>
                                <li>
                                    <a target="_blank" href="<?= $social->link ?>">
                                        <i class='bx bxl-<?= $social->title ?>'></i></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- =============== Topbar area end =============== -->


    <!-- ===============  header area start =============== -->
    <header>
        <div class="header-area">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-wrap">
                            <div class="logo d-flex justify-content-between">
                                <a href="/" class="navbar-brand">
                                    <img width="100%" src="/template/images/logo/logo-no-back.png" alt="">
                                </a>
                            </div>
                            <div class="navbar-icons">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="mobile-menu d-flex ">
                                    <div class="top-search-bar m-0 d-block d-xl-none">
                                    </div>

                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <nav class="main-nav">
                            <div class="navber-logo-sm">
                                "Shahrisabz" turizm markazi
                                <!--                                <img src="/template/images/logo-2.png" alt="" class="img-fluid">-->
                            </div>
                            <ul>
                                <?php foreach ($menus as $menu): ?>
                                    <li class="<?= !empty($menu->subMenu) ? 'has-child-menu' : '' ?>">
                                        <a style="text-transform: uppercase" target="<?= $menu->is_external == 1 ?  '_blank' : '_self'?>" href="<?= !empty($menu->subMenu) ? 'javascript:void(0)' : $menu->url ?>"><?= $menu->title ?></a>
                                        <i class="fl flaticon-plus">+</i>
                                        <?php if (!empty($menu->subMenu)): ?>
                                            <ul class="sub-menu">
                                                <?php foreach ($menu->subMenu as $subMenu): ?>
                                                    <li><a style="text-transform: uppercase" href="<?= $menu->url ?>" class="sub-item"><?= $subMenu->title ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="navbar-icons-2">
                                <div class="searchbar-open">
                                    <i class="flaticon-magnifier"></i>
                                </div>
                                <div class="sidebar-contact">
                                    <ul>
                                        <li class="sidebar-single-contact"><i class='bx bxs-phone'></i> <a
                                                    href="tel:+998990005795">+998 (99)-000-5795</a></li>
                                        <li class="sidebar-single-contact"><i class='bx bxs-envelope'></i><a
                                                    href="mailto:info@mturizm.uz">info@shahrisabz.uz</a></li>
                                    </ul>
                                </div>
                        </nav>
                    </div>
                </div>
            </div>
            <form>
                <div class="main-searchbar">
                    <div class="searchbar-close">
                        <i class='bx bx-x'></i>
                    </div>
                    <input type="text" placeholder="Bu yerdan izlang......">
                    <div class="searchbar-icon">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </form>
        </div>
    </header>
    <!-- ===============  header area end =============== -->


    <?= $content ?>

    <!-- ==============  Footer area start================= -->
    <div class="footer-area" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-info">
                        <div class="footer-logo">
                            <img src="/template/images/logo/logo-no-back.png" width="50%" alt="" class="img-fluid">
                        </div>
                        <p></p>
                        <div class="footer-social-icons">
                            <h5>Bizni kuzating:</h5>
                            <ul>
                                <?php foreach ($socials as $social): ?>
                                    <li><a target="_blank" href="<?= $social->link ?>"><i
                                                    class='bx bxl-<?= $social->title ?>'></i></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="achievement-area" style="border-top-right-radius: 10px; border-top-left-radius: 10px">
                        <div style="position:relative;overflow:hidden; border-top-right-radius: 10px; border-top-left-radius: 10px">
                            <a href="https://yandex.uz/maps/org/236557694293/?utm_medium=mapframe&utm_source=maps"
                               style="color:#eee;font-size:22px;position:absolute;top:0px;">Санаторий Мираки</a>
                            <a href="https://yandex.uz/maps/105807/qashqadaryo-province/category/sanatorium/184106404/?utm_medium=mapframe&utm_source=maps"
                               style="color:#eee;font-size:12px;position:absolute;top:14px;">Санаторий в
                                Кашкадарьинской области</a>
                            <iframe src="https://yandex.uz/map-widget/v1/?ll=67.111664%2C39.039630&mode=search&oid=236557694293&ol=biz&z=13.26"
                                    width="100%" height="280" frameborder="0" allowfullscreen="true"
                                    style="position:relative;">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyrigth-area">
                        <p>Copyright <?= date("Y"); ?> <a href="#">MTurizm</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ==============  Footer area end================= -->


    <?php $this->endBody() ?>
    <script>
        var element = $(".element");
        $(function () {
            element.typed({
                strings: ["Miraki", "Shakhrisabz", "Kitob"],
                typeSpeed: 190,
                loop: true,
            });
        });
    </script>
    </body>
    </html>
<?php $this->endPage();