<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMC || Global Moeslim Charity</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('asting/images/favicons/favicon-gmc.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('asting/images/favicons/favicon-gmc.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('asting/images/favicons/favicon-gmc.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('asting/images/favicons/site.webmanifest')); ?>">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <?php echo $__env->make('vendor.swal.css.swal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('style'); ?>


    <!-- Css-->
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/swiper.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/jarallax.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('asting/css/jquery.mCustomScrollbar.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/bootstrap-datepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/vegas.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/nouislider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/nouislider.pips.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/asting.css')); ?>">
    <!-- Template styles -->
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('asting/css/responsive.css')); ?>">

</head>

<body>

    <div class="preloader">
        <img src="<?php echo e(asset('asting/images/loader-gmc.png')); ?>" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <div class="site-header__header-one-wrap clearfix">
            <div class="container">
                <div class="site-header__logo-box float-left">
                    <div class="site-header__logo">
                        <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('asting/images/resources/logo-gmc.png')); ?>" alt=""></a>
                    </div>
                </div>

                <header class="main-nav__header-one">
                    <div class="main-nav__header-one__top clearfix">
                        <div class="main-nav__header-one__top-left">
                            <ul c lass="list-unstyled">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-square-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>
                                            <a href="tel:081514698393">081514698393 Miftha</a> ||
                                            <a href="tel:081212936528">081212936528 Shabila</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">cs@globalmoeslimcharity.com</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-nav__header-one__top-right">
                            <div class="main-nav__header-one__top-social">
                                <a target="_blank" href="https://web.facebook.com/globalmoeslimcharity"><i class="fab fa-facebook-square"></i></a>
                                <a target="_blank" href="https://twitter.com/GlobalMoeslimCh"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://www.instagram.com/globalmoeslimcharity/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCDYrylDf-gUjq37NlrkTtGg"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="header-navigation stricky">
                        <div class="container clearfix">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="main-nav__left main-nav__left-one float-left">
                                <a href="#" class="side-menu__toggler">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <div class="main-nav__main-navigation clearfix">
                                    <ul class=" main-nav__navigation-box float-left">
                                        <li class="dropdown current">
                                            <a href="<?php echo e(route('home')); ?>">Beranda</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Profil</a>
                                            <ul>
                                                <li><a href="/tentang-kami">Tentang Kami</a></li>
                                                <li><a href="/manage">Manajemen</a></li>
                                                <li><a href="/legal">Legal</a></li>
                                                <li><a href="/relawan">Relawan</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?php echo e(route('program.index')); ?>">Program</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="<?php echo e(route('article.index')); ?>">Artikel</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Layanan</a>
                                            <ul>
                                                <li><a href="<?php echo e(route('relawan.index')); ?>">Pengajuan Relawan</a></li>
                                            </ul><!-- /.sub-menu -->
                                        </li>
                                        <li>
                                            <a href="/video">Video</a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div>
                            <div class="main-nav__right main-nav__right-one float-right">
                                <div class="main-nav__right__btn-one">
                                    <a href="<?php echo e(route('member.login.index')); ?>"><i class="fas fa-lock"></i>Login</a>
                                </div>

                                
                            </div>
                        </div>
                    </nav>
                </header>
            </div>
        </div>

        <?php echo $__env->yieldContent('content'); ?>

        <!--Site Footer One Start-->
        <footer class="site-footer" style="background-image: url(assets/images/backgrounds/site_footer_bg.jpg)">
            <div class="container">
                <div class="site-footer__one-top">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="<?php echo e(route('home')); ?>"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <p class="footer-widget__text">Dukung dan ikuti sosial media kami untuk mendapatkan update informasi seputar kegiatan GMC</p>
                                <div class="site-footer__social">
                                    <a target="_blank" href="https://twitter.com/GlobalMoeslimCh"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://web.facebook.com/globalmoeslimcharity" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                    <a target="_blank" href="https://www.youtube.com/channel/UCDYrylDf-gUjq37NlrkTtGg" class="clr-dri"><i class="fab fa-youtube"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/globalmoeslimcharity/" class="clr-ins"><i class="fab fa-instagram"></i></a>


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Profil</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="/tentang-kami">Tentang Kami</a></li>
                                    <li><a href="#">Program</a></li>
                                    <li><a href="#">Legalitas</a></li>
                                    <li><a href="#">Manajemen</a></li>
                                    <li><a href="#">Mitra</a></li>
                                </ul>
                                <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Faqs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:+62 813-8001-3975">+62 813-8001-3975</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="cs@globalmoeslimcharity.com">cs@globalmoeslimcharity.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>
                                                Beltway Office Park Tower A lt 3 Jl. Ampera Raya, RW.2, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12540
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__support">
                                <h3 class="footer-widget__title">Support</h3>
                                <p class="footer-widget__support-text">Mari bersama kami mengentaskan kemiskinan global dengan cara donasi di GMC</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->

        <!--Site Footer Bottom Start-->
        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer-bottom__inner">
                            <div class="site-footer-bottom__left">
                                <p>© Copyright 2022 by <a href="#">Global Moeslim Charity</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Site Footer Bottom End-->


    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="<?php echo e(route('home')); ?>" aria-label="logo image">
                    <img src="assets/images/resources/logo-2.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:cs@globalmoeslimcharity.com">cs@globalmoeslimcharity.com</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
    </div>


    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>


    <script src="<?php echo e(asset('asting/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jquery.counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/TweenMax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/typed-2.0.11.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/vegas.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/bootstrap-datepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/nouislider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('asting/js/jarallax.js')); ?>"></script>


    <!-- template scripts -->
    <script src="<?php echo e(asset('asting/js/theme.js')); ?>"></script>
    <?php echo $__env->make('vendor.swal.js.swal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/layout/asting.blade.php ENDPATH**/ ?>