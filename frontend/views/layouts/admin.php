<?php

/** @var \yii\web\View $this */

/** @var string $content */

use frontend\assets\AppAssetAdmin;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAssetAdmin::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <link rel="icon" type="image/x-icon" href="#"/>
        <link
                href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
                rel="stylesheet"
        />
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <style>
            .help-block {
                color: darkred;
            }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <?php
    $route = Yii::$app->controller->id;
    ?>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="/" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2 text-uppercase fw-bold">MTurizm</span>
                    </a>

                    <a href="javascript:void(0);"
                       class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item <?= $route == 'default' ? 'active' : ''; ?>">
                        <a href="/" class="menu-link" target="_blank">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Sayt kontenti</span>
                    </li>
                    <li class="menu-item <?= $route == 'post' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/post']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-ul"></i>
                            <div data-i18n="Boxicons">Yangiliklar</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'lot' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/lot']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-code-alt"></i>
                            <div data-i18n="Boxicons">Lotlar</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'banner' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/banner']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-image"></i>
                            <div data-i18n="Boxicons">Bannerlar</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'gallery' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/gallery']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-image"></i>
                            <div data-i18n="Boxicons">Galleriya</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'menu' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/menu']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Boxicons">Menular</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'page' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/page']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                            <div data-i18n="Boxicons">Sahifalar</div>
                        </a>
                    </li>
                    <li class="menu-item <?= $route == 'social-messenger' ? 'active' : ''; ?>">
                        <a href="<?= Url::toRoute(['/admin/social-messenger']) ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bxl-telegram"></i>
                            <div data-i18n="Boxicons">Ijtimoiy tarmoqlar</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Sozlamalar</span>
                    </li>
                    <li class="menu-item <?= in_array($route, ['expert', 'organization', 'user']) ? 'active open' : ''; ?> ">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="User interface">Sozlamalar paneli</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item <?= $route == 'user' ? 'active' : '' ?>">
                                <a href="<?= Url::toRoute(['/admin/user']) ?>" class="menu-link">
                                    <div data-i18n="Accordion">Фойдаланувчилар</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                     id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input
                                        type="text"
                                        class="form-control border-0 shadow-none"
                                        placeholder="Қидириш..."
                                        aria-label="Қидириш..."
                                />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <?= Yii::$app->user->identity->username ?>
                            </li>

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                   data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <?= Html::img('/src_admin/img/avatars/1.png', ['class' => 'w-px-40 h-auto rounded-circle']) ?>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item"
                                           href="<?= Url::toRoute(['/admin/default/profile', 'id' => 1]) ?>">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <?= Html::img('/src_admin/img/avatars/1.png', ['class' => 'w-px-40 h-auto rounded-circle']) ?>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?= Yii::$app->user->identity->username ?></span>
                                                    <small class="text-muted">online</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/auth/logout"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Тизимдан чиқиш</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                    <form action="/auth/logout" method="post" id="logout-form" class="d-none">
                        <input id="form-token" type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                               value="<?= Yii::$app->request->csrfToken ?>"/>
                    </form>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper container-fluid">
                    <!-- Content -->
                    <?= $content ?>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <a href="https://imv.uz" target="_blank" class="footer-link fw-bolder">Axborot
                                    xavfsizligini ta'minlash bo'limi</a>
                            </div>
                            <div>
                                <a href="https://imv.uz" class="footer-link me-4" target="_blank">IMV</a>
                                <a href="https://imv.uz" target="_blank" class="footer-link me-4">IMV</a>
                                <a href="https://imv.uz" target="_blank" class="footer-link me-4">IMV</a>
                                <a href="https://t.me/ErgashevXurshid" target="_blank"
                                   class="footer-link me-4">Support</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
