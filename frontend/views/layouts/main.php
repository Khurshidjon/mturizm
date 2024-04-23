<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
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
                        <li><i class='bx bxs-phone'></i><a href="tel:+998990005795">+998 (99)-000-5795</a></li>
                        <li><i class='bx bxs-envelope'></i><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6">
                <div class="topbar-social">
                    <ul>
                        <li>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="#"><i class='bx bxl-whatsapp'></i></a>
                        </li>
                    </ul>
                </div>
            </div>

<!--            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6">-->
<!--                <div class="custom-select languege-select">-->
<!--                    <select>-->
<!--                        <option value="0">ENG</option>-->
<!--                        <option value="1">BAN</option>-->
<!--                        <option value="2">FSP</option>-->
<!--                        <option value="3">CHI</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>
</div>
<!-- =============== Topbar area end =============== -->


<!-- ===============  header area start =============== -->
<header>
    <div class="header-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                    <div class="navbar-wrap">
                        <div class="logo d-flex justify-content-between">
                            <a href="index.html" class="navbar-brand"> <img src="/template/images/logo.png" alt=""></a>
                        </div>
                        <div class="navbar-icons">
                            <div class="searchbar-open">
                                <i class="flaticon-magnifier"></i>
                            </div>
                            <div class="user-dropdown-icon">
                                <i class="flaticon-user"></i>

                                <div class="account-dropdown">
                                    <ul>
                                        <li class="account-el">
                                            <i class='bx bx-user-pin'></i>
                                            <a href="#">Sign in</a>
                                        </li>
                                        <li class="account-el">
                                            <i class='bx bxs-user-account'></i>
                                            <a href="#">My Account</a>
                                        </li>
                                        <li class="account-el">
                                            <i class='bx bx-extension'></i>
                                            <a href="#">Settings</a>
                                        </li>
                                        <li class="account-el">
                                            <i class='bx bx-log-in-circle'></i>
                                            <a href="#">Log out</a>
                                        </li>
                                    </ul>
                                </div>
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
                            <img src="/template/images/logo-2.png" alt="" class="img-fluid">
                        </div>
                        <ul>
                            <li><a href="javascript:void(0)">Bosh sahifa</a></li>
                            <li><a href="destination.html">Lotlar</a></li>
                            <li><a href="destination.html">Yangiliklar</a></li>
<!--                            <li class="has-child-menu">-->
<!--                                <a href="javascript:void(0)">Tour Package</a>-->
<!--                                <i class="fl flaticon-plus">+</i>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="package.html" class="sub-item">package</a></li>-->
<!--                                    <li><a href="package-sidebar.html" class="sub-item">package sidebar</a></li>-->
<!--                                    <li><a href="package-standard.html" class="sub-item">package standard</a></li>-->
<!--                                    <li><a href="package-details.html" class="sub-item">package details</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="has-child-menu">-->
<!--                                <a href="javascript:void(0)">Blogs</a>-->
<!--                                <i class="fl flaticon-plus">+</i>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="blog.html" class="sub-item">Blog page</a></li>-->
<!--                                    <li><a href="blog-sidebar.html" class="sub-item">Blog sidebar</a></li>-->
<!--                                    <li><a href="blog-standard.html" class="sub-item">Blog standard</a></li>-->
<!--                                    <li><a href="blog-details.html" class="sub-item">blog-details </a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Galleriya</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    <li><a href="gallary.html" class="sub-item">Fotogalleriya</a></li>
                                    <li><a href="guide.html" class="sub-item">Videogalleriya</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-icons-2">
                            <div class="searchbar-open">
                                <i class="flaticon-magnifier"></i>
                            </div>
<!--                            <div class="user-dropdown-icon">-->
<!--                                <i class="flaticon-user"></i>-->
<!--                                <div class="account-dropdown">-->
<!--                                    <ul>-->
<!--                                        <li class="account-el">-->
<!--                                            <i class='bx bx-user-pin'></i>-->
<!--                                            <a href="#">Sign in</a>-->
<!--                                        </li>-->
<!--                                        <li class="account-el">-->
<!--                                            <i class='bx bxs-user-account'></i>-->
<!--                                            <a href="#">My Account</a>-->
<!--                                        </li>-->
<!--                                        <li class="account-el">-->
<!--                                            <i class='bx bx-extension'></i>-->
<!--                                            <a href="#">Settings</a>-->
<!--                                        </li>-->
<!--                                        <li class="account-el">-->
<!--                                            <i class='bx bx-log-in-circle'></i>-->
<!--                                            <a href="#">Log out</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <div class="sidebar-contact">
                            <ul>
                                <li class="sidebar-single-contact"><i class='bx bxs-phone'></i> <a href="tel:+998990005795">+998 (99) 000 57-95</a></li>
                                <li class="sidebar-single-contact"><i class='bx bxs-envelope'></i><a href="mailto:info@example.com">info@example.com</a></li>
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

<!-- ===============  Main banner area start =============== -->
<div class="main-banner-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="main-banner-content-2">
                    <h2>Amazing Tour In <br>
                        <span class="element">Miraki</span> </h2>
                    <h3>Tabiatning, 8 Night Tour</h3>
                </div>
            </div>
        </div>
        <div class="find-form-2">
            <form class="findfrom-wrapper">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" placeholder="Where To...">
                    </div>
                    <div class="col-lg-3">
                        <div class="calendar-input">
                            <input type="text" name="check-in" class="input-field check-in" placeholder="dd-mm-yy">
                            <i class="flaticon-calendar"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="custom-select">
                            <select>
                                <option value="0">Travel Type</option>
                                <option value="1">City Tours</option>
                                <option value="2">Vacation Tours</option>
                                <option value="3">Couple Tours </option>
                                <option value="4">Adventure Tours</option>
                                <option value="5">Group Tours</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="find-btn">
                            <a href="#" class="btn-second"><i class='bx bx-search-alt'></i> Find now</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ===============  Main banner area end =============== -->

<?= $content ?>

<!-- ==============  Footer area start================= -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="/template/images/logo-2.png" alt="" class="img-fluid">
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid maxime aut ut voluptate
                        dolorum nisi ducimus ratione</p>
                    <div class="footer-social-icons">
                        <h5>Follow Us:</h5>
                        <ul>
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-dribbble'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-links">
                            <h5 class="widget-title">Contact us</h5>

                            <div class="contact-box">
                                <span><i class="bx bx-phone"></i></span>
                                <div>
                                    <a href="tel:+01852-1265122">+01852-1265122</a>
                                    <a href="tel:+01852-1265122">+01852-1265122</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <span><i class="bx bx-mail-send"></i></span>
                                <div>
                                    <a href="mailto:info@example.com">info@example.com</a>
                                    <a href="mailto:support@example.com">support@example.com</a>
                                </div>
                            </div>
                            <div class="contact-box">
                                <span><i class="bx bx-location-plus"></i></span>
                                <div>
                                    <a href="#">2752 Willison Street <br>
                                        Eagan, United State</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-links">
                            <h5 class="widget-title">support</h5>
                            <div class="category-list">
                                <ul>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="blog.html">our Blogs</a></li>
                                    <li><a href="#">terms and conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-links payment-links">
                            <h5 class="widget-title">We Accepts:</h5>
                            <div class="payment-cards">
                                <img src="/template/images/payment/payment-card-2.png" alt="" class="img-fluid">
                                <img src="/template/images/payment/payment-card-1.png" alt="" class="img-fluid">
                                <img src="/template/images/payment/payment-card-3.png" alt="" class="img-fluid">
                                <img src="/template/images/payment/payment-card-4.png" alt="" class="img-fluid">
                                <img src="/template/images/payment/payment-card-5.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyrigth-area">
                    <p>Copyright 2021 <a href="#">TourX</a> | Design By <a href="#">Egens Lab</a></p>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ==============  Footer area end================= -->


<?php $this->endBody() ?>
<script>
    //Type js
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
