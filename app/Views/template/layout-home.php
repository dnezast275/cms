<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>/img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= base_url() ?>/style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="<?= base_url(); ?>" class="nav-brand"><img src="<?= base_url() ?>/img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                                    <li><a href="<?= base_url('/archive'); ?>">Archive</a></li>
                                    <li><a href="#">Category</a>
                                        <ul class="dropdown">
                                            <?php foreach ($category as $c) : ?>
                                                <li><a href="<?= base_url('/category') . '/' . $c['category_slug'] ?>"><?= $c['category_name'] ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="#">Mega</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="<?= base_url('/post') ?>">Single Post</a></li>
                                                <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="<?= base_url('/post') ?>">Single Post</a></li>
                                                <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="<?= base_url('/post') ?>">Single Post</a></li>
                                                <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="<?= base_url('/post') ?>">Single Post</a></li>
                                                <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li><a href="<?= base_url('/about') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <!-- <a href="login.html" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a> -->
                            <!-- Submit Video -->
                            <!-- <a href="submit-video.html" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <?= $this->renderSection('content') ?>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="<?= base_url() ?>/img/logo.png" alt="" style="max-width: 140px;"></a>
                        <span class="address"><strong>Alamat</strong></span><br>
                        <span>Perumahan Cikampek Baru Blok 8.8 No. 08</span><br>
                        <span>Ds. Balonggandu Kec. Jatisari</span><br>
                        <span>Jawa Barat, 41374</span><br>
                        <div class="footer-social-info mt-4">
                            <a href="https://facebook.com/muhamadramdanihidayatullah" target="blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://youtube.com" target="blank" class="google-plus"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://instagram.com/muhamadramdani275" target="blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/dnezast_275" target="blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="footer-widget">
                        <h6 class="widget-title">Categories</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <?php foreach ($category as $c) : ?>
                                    <li><a href="<?= base_url('/category') . '/' . $c['category_slug'] ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i><?= $c['category_name'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li style="color:#fff;">
                                    Made with <i class="fa fa-heart" style="color:red;"></i> by <a href="<?= base_url() ?>" target="_blank">dNezast</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url() ?>/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url() ?>/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?= base_url() ?>/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>/js/active.js"></script>
</body>

</html>