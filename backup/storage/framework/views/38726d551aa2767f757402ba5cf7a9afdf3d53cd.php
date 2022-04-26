<?php $__env->startSection('content'); ?>
<!-- Main Slider Start -->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
        },
        "autoplay": {
        "delay": 5000
        }}'>

        <div class="swiper-wrapper">
            <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo e($program->image_url); ?>);"></div>
                <div class="container">
                    <div class="swiper-slide__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>GLOBAL MOESLIM CHARITY </p>
                                <h2><?php echo e($program->title); ?></h2>
                                <a href="<?php echo e(route('program.show',$program->slug)); ?>" class="thm-btn">Donasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider-nav">
            <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
            <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
        </div>
    </div>
</section>
<!-- Main Slider End -->

<!--Three Icon Start-->
<section class="feature-one">
    <div class="container">
        <div class="feature-one__inner" style='overflow:auto;'>
            <div class="row">
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-4">
                    <!--Three Icon Single-->
                    <div class="feature-one__single feature-one__single-first-item">
                        <div class="feature-one__icon-wrap">
                            <div class="feature-one__icon-box">
                                <span class="container">
                                <h4><?php echo e($data->nama); ?></h4>
                                </span>
                            </div>
                        </div>
                        <p class="feature-one__icons-single-text"><?php echo e($data->keterangan); ?></p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>
</section>

<!--Three Icon End-->

<!--Welcome One Start-->
<section class="welcome-one" style="background-image: url(<?php echo e(asset('asting/images/backgrounds/welcome_one_bg.jpg')); ?>)">
    <div class="welcome-one-hands"
        style="background-image:url(<?php echo e(asset('asting/images/backgrounds/welcome_one_hands.png')); ?>)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img wow slideInLeft" data-wow-delay="100ms">
                        <img src="<?php echo e(asset('asting/images/resources/welcome_one_img_1.jpg')); ?>" alt="">
                        <div class="welcome-one__badge">
                            <img src="<?php echo e(asset('asting/images/resources/welcome_one_badge.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="block-title text-left">
                        <h2>Presiden GMC</h2>
                    </div>
                    <p class="welcome-one__text">GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara
                        kolektif yang secara khusus mendedikasikan perannya dalam pembebasan
                        kemiskinan Masyarakat Global berbasis charity Islam.</p>
                    <ul class="welcome-one__list list-unstyled">
                        <li><span class="icon-confirmation"></span>Cakupan aktivitas
                            kerja cakupan Internasional </li>
                        <li><span class="icon-confirmation"></span>Masyarakat Muslim Internasional sebagai
                            kekuatan kolektif sekaligus sebagai subjek utama charity</li>
                        <li><span class="icon-confirmation"></span>Aktivitas amal kolektif Masyarakat Muslim Dunia secara komprehensif </li>
                    </ul>
                    <div class="welcome-one__campaigns">
                        <div class="iocn">
                            <span class="icon-donation"></span>
                        </div>
                        <div class="text">
                            <h2 class="counter">86,700</h2>
                            <p>Successfull Campaigns</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Popular Causes Start-->
<section class="popular-causes">
    <div class="container">
        <div class="block-title text-left">
            <h4>Mari Bantu Sesama</h4>
            <h2>Program Charity Kami</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="popular-causes__carousel owl-theme owl-carousel">
                    <!--Popular Causes Single-->
                    <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="<?php echo e($program->image_url); ?>" alt="">
                            
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <h3><a href="<?php echo e(route('program.show',$program->slug)); ?>"><?php echo e($program->title); ?></a>
                                </h3>
                                <p><?php echo e($program->description_formated); ?></p>
                            </div>
                            <div class="popular-causes__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="<?php echo e($program->percent); ?>%">
                                        <div class="count-text"><?php echo e(number_format($program->percent,2,',','.')); ?>%</div>
                                    </div>
                                </div>
                                <div class="popular-causes__goals">
                                    <p><span>Rp <?php echo e(number_format($program->total_donasi,0,',','.')); ?></span> Terkumpul</p>
                                    <p><span>Rp <?php echo e(number_format($program->target_amount,0,',','.')); ?></span> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Popular Causes One End-->


<!--Join One Start-->
<section class="join-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
    style="background-image: url(<?php echo e(asset('asting/images/backgrounds/join_one_bg.jpg')); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="join-one__inner">
                    <div class="join-one__icon">
                        <span class="icon-helping-hand"></span>
                    </div>
                    <h2>Bersama Memberantas Kemiskinan Membangun Perekonomian</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Join One End-->

<!--Newsletter One Start-->
<section class="newsletter-one">
    <div class="container">
        <div class="newsletter-one__inner">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-one__inner">
                        <div class="cta-one__text">
                            <p style="color: green;">Bantu sesama yang membutuhkan</p>
                            <h3 style="color: green">Daftarkan Diri jadi Volunteers GMC</h3>
                        </div>
                        <div class="cta-one__btn">
                            <a href="<?php echo e(route('relawan.index')); ?>" class="thm-btn">Gabung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Newsletter One End-->

<!--News One Start-->
<section class="news-one">
    <div class="news-one-bg" style="background-image: url(<?php echo e(asset('asting/images/backgrounds/news_one_bg.jpg')); ?>)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="block-title text-left">
                    <h4>Informasi</h4>
                    <h2>Berita & Artkel</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="news-one__top-text">
                    <p>There are many variations of passages of lorem available but the majority have suffered
                        in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4">
                <!--News One Single-->
                <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__img">
                        <div class="news-one__img-box">
                            <img src="<?php echo e($article->image_url); ?>" alt="">
                            <a href="<?php echo e(route('article.show',$article->slug)); ?>"></a>
                        </div>
                        <div class="news-one__date-box">
                            <p><?php echo e(date('d',strtotime($article->published_at))); ?> <br>
                                <?php echo e(date('M',strtotime($article->published_at))); ?></p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        
                        <div class="news-one__title">
                            <h3><a href="<?php echo e(route('article.show',$article->slug)); ?>"><?php echo e($article->title); ?></a></h3>
                        </div>
                        <a href="<?php echo e(route('article.show',$article->slug)); ?>" class="thm-btn news-one__btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
<!--News One End-->

<!--Gallery One Start-->
<section class="gallery-one">
    <div class="gallery-one__container-box clearfix">
        <div class="thm-swiper__slider swiper-container gallery-one__content" data-swiper-options='{"spaceBetween": 20, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 10,
                "slidesPerView": 1
            },
            "375": {
                "spaceBetween": 20,
                "slidesPerView": 1
            },
            "575": {
                "spaceBetween": 20,
                "slidesPerView": 2
            },
            "767": {
                "spaceBetween": 20,
                "slidesPerView": 3
            },
            "991": {
                "spaceBetween": 20,
                "slidesPerView": 4
            },
            "1199": {
                "spaceBetween": 20,
                "slidesPerView": 5
            }
        }}'>
            <!-- swiper wrapper start -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="<?php echo e(asset('asting/images/gallery/gallery_one_img_1.jpg')); ?>" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_1.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="<?php echo e(asset('asting/images/gallery/gallery_one_img_2.jpg')); ?>" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_2.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="<?php echo e(asset('asting/images/gallery/gallery_one_img_3.jpg')); ?>" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_3.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="<?php echo e(asset('asting/images/gallery/gallery_one_img_4.jpg')); ?>" alt="">
                        <div class="gallery-one__iocn">
                            <a href="<?php echo e(asset('asting/images/gallery/gallery_one_img_4.jpg')); ?>" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gallery-one__img-box">
                        <img src="<?php echo e(asset('asting/images/gallery/gallery_one_img_5.jpg')); ?>" alt="">
                        <div class="gallery-one__iocn">
                            <a href="assets/images/gallery/gallery_one_img_5.jpg" class="img-popup"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->
        </div>
        <!-- end .swiper-container -->
    </div>
</section>
<!--Gallery One End-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="brand-one-bg" style="background-image: url(<?php echo e(asset('asting/images/backgrounds/brand-one-bg.png')); ?>)"></div>
    <div class="brand-one__container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 0, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "slidesPerView": 2
            },
            "375": {
                "slidesPerView": 2
            },
            "575": {
                "slidesPerView": 2
            },
            "767": {
                "slidesPerView": 3
            },
            "991": {
                "slidesPerView": 4
            },
            "1199": {
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="<?php echo e(asset('asting/images/brand/brand_1_img_1.png')); ?>" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="<?php echo e(asset('asting/images/brand/brand_1_img_2.png')); ?>" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="<?php echo e(asset('asting/images/brand/brand_1_img_3.png')); ?>" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="<?php echo e(asset('asting/images/brand/brand_1_img_4.png')); ?>" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-one__img">
                        <img src="<?php echo e(asset('asting/images/brand/brand_1_img_5.png')); ?>" alt="">
                    </div>
                </div>
            </div><!-- /.swiper-wrapper -->
        </div>
    </div>
</section>
<!--Brand One End-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/home.blade.php ENDPATH**/ ?>