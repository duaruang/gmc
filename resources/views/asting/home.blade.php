@extends('layout.asting')

@section('content')
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
            @foreach ($programs as $program)
            <div class="swiper-slide" style='width:100%;height:800px'>
                <div class="image-layer" style="
                background-image: url({{ $program->image_url }});
                filter: grayscale(40%);
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                ">
                </div>
                <div class="container">
                    <div class="swiper-slide__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <h2>{{ucfirst(strtolower($program->title))}}</h2>
                                <a href="/program" class="thm-btn">Donasi Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                @foreach($kategori as $data)
                <div class="col-xl-4 col-lg-4">
                    <!--Three Icon Single-->
                    <div class="feature-one__single feature-one__single-first-item" style='cursor:pointer'>
                        <a href="{{ route('program.kategori',$data->kategori_id) }}">
                            <div class="feature-one__icon-box">
                                <span class="container text-center" style='font-size:19pt'>
                                    <img src="{{asset('images/kategori/' . $data->image)}}" style='width:100%'>
                                </span>
                            </div>
                        </a>
                        <p class="feature-one__icons-single-text text-center">{{$data->keterangan}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!--Three Icon End-->

<!--Welcome One Start-->
<section class="welcome-one" style="background-image: url({{ asset('asting/images/backgrounds/introduction-bg-1-1.png') }})">
    <div class="welcome-one-hands" style="background-image:url({{ asset('asting/images/backgrounds/introduction-bg-1-1.png') }})"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img wow slideInLeft" data-wow-delay="100ms">
                        <img src="{{ asset('asting/images/resources/three_iocn_box_bg-3.png') }}" alt="">
                        <div class="welcome-one__badge">
                            <img src="{{ $lain->image_url }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <div class="block-title text-left">
                        <h2>{{ $lain->judul }}</h2>
                    </div>
                    <p class="welcome-one__text"><?= $lain->keterangan?></p>
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
                    @foreach ($programs as $program)
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="{{ $program->image_url }}" alt="" style='width:100%;height:200px'>
                            {{-- <div class="popular-causes__category">
                                <p>Food</p>
                            </div> --}}
                        </div>
                        <div class="popular-causes__content" >
                            <div class="popular-causes__title" style='height:200px'>
                                <h3><a href="{{ route('program.show',$program->slug) }}"><?= ucfirst(strtolower($program->title))?></a>
                                </h3>
                                <p>{{ $program->description_formated }}</p>
                            </div>
                            <div class="popular-causes__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $program->percent }}%">
                                        <div class="count-text" style='margin:0px -20px 0px 0px'>{{ number_format($program->percent,2,',','.') }}%</div>
                                    </div>
                                </div>
                                <div class="popular-causes__goals">
                                    <p><span>Rp {{ number_format($program->total_donasi,0,',','.') }}</span><br> Terkumpul</p>
                                    <p><span>Rp {{ number_format($program->target_amount,0,',','.') }}</span><br> Goal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--Popular Causes One End-->


<!--Join One Start-->
<section class="join-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url({{ asset('asting/images/backgrounds/join_one_bg.jpg') }})">
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
                            <h3 style="color: green">Daftarkan diri jadi relawan GMC</h3>
                        </div>
                        <div class="cta-one__btn">
                            <a href="{{ route('relawan.index') }}" class="thm-btn">Gabung</a>
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
    <div class="news-one-bg" style="background-image: url({{ asset('asting/images/backgrounds/news_one_bg.jpg') }})"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="block-title text-left">
                    <h4>Informasi</h4>
                    <h2>Artikel</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="block-title text-right">
                    <a href='/artikel' class='btn btn-success'><i class="fa fa-list"></i> Lihat lainnya</a>
                </div>
            </div>
            <!-- <div class="col-xl-6 col-lg-6">
                <div class="news-one__top-text">
                    <p>There are many variations of passages of lorem available but the majority have suffered
                        in some form.</p>
                </div>
            </div> -->
        </div>
        <div class="row">
            <?php 
            function shorter($text, $chars_limit)
            {
                // Check if length is larger than the character limit
                if (strlen($text) > $chars_limit)
                {
                    // If so, cut the string at the character limit
                    $new_text = substr($text, 0, $chars_limit);
                    // Trim off white space
                    $new_text = trim($new_text);
                    // Add at end of text ...
                    return $new_text . "...";
                }
                // If not just return the text as is
                else
                {
                return $text;
                }
            }
            ?>
            @foreach ($articles as $article)
            <div class="col-xl-4 col-lg-4">
                <!--News One Single-->
                <div class="news-one__single wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__img">
                        <div class="news-one__img-box">
                            <img src="{{ $article->image_url }}" alt="" style='width:100%;height:300px'>
                            <!-- <a href= route('article.show',$article->slug)"></a> -->
                        </div>
                        <div class="news-one__date-box">
                            <p>{{ date('d',strtotime($article->published_at)) }} <br>
                                {{ date('M',strtotime($article->published_at)) }}</p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        <div class="news-one__title">
                            <h3><a href="{{ route('article.show',$article->slug) }}"><?= ucfirst(strtolower($article->title))?></a></h3>
                            <p><?= shorter(strip_tags($article->content),70) ?></p>
                        </div>
                        <a href="{{ route('article.show',$article->slug) }}" class="thm-btn news-one__btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--News One End-->

<!--Gallery One Start-->
<!--<section class="gallery-one">-->
<!--    <div class="gallery-one__container-box clearfix">-->
<!--        <div class="thm-swiper__slider swiper-container gallery-one__content" data-swiper-options='{"spaceBetween": 20, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {-->
<!--            "0": {-->
<!--                "spaceBetween": 10,-->
<!--                "slidesPerView": 1-->
<!--            },-->
<!--            "375": {-->
<!--                "spaceBetween": 20,-->
<!--                "slidesPerView": 1-->
<!--            },-->
<!--            "575": {-->
<!--                "spaceBetween": 20,-->
<!--                "slidesPerView": 2-->
<!--            },-->
<!--            "767": {-->
<!--                "spaceBetween": 20,-->
<!--                "slidesPerView": 3-->
<!--            },-->
<!--            "991": {-->
<!--                "spaceBetween": 20,-->
<!--                "slidesPerView": 4-->
<!--            },-->
<!--            "1199": {-->
<!--                "spaceBetween": 20,-->
<!--                "slidesPerView": 5-->
<!--            }-->
<!--        }}'>-->
<!-- swiper wrapper start -->
<!--            <div class="swiper-wrapper">-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="gallery-one__img-box">-->
<!--                        <img src="{{ asset('asting/images/gallery/gallery_one_img_1.jpg') }}" alt="">-->
<!--                        <div class="gallery-one__iocn">-->
<!--                            <a href="assets/images/gallery/gallery_one_img_1.jpg" class="img-popup"><i-->
<!--                                    class="fab fa-instagram"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="gallery-one__img-box">-->
<!--                        <img src="{{ asset('asting/images/gallery/gallery_one_img_2.jpg') }}" alt="">-->
<!--                        <div class="gallery-one__iocn">-->
<!--                            <a href="assets/images/gallery/gallery_one_img_2.jpg" class="img-popup"><i-->
<!--                                    class="fab fa-instagram"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="gallery-one__img-box">-->
<!--                        <img src="{{ asset('asting/images/gallery/gallery_one_img_3.jpg') }}" alt="">-->
<!--                        <div class="gallery-one__iocn">-->
<!--                            <a href="assets/images/gallery/gallery_one_img_3.jpg" class="img-popup"><i-->
<!--                                    class="fab fa-instagram"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="gallery-one__img-box">-->
<!--                        <img src="{{ asset('asting/images/gallery/gallery_one_img_4.jpg') }}" alt="">-->
<!--                        <div class="gallery-one__iocn">-->
<!--                            <a href="{{ asset('asting/images/gallery/gallery_one_img_4.jpg') }}" class="img-popup"><i-->
<!--                                    class="fab fa-instagram"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="gallery-one__img-box">-->
<!--                        <img src="{{ asset('asting/images/gallery/gallery_one_img_5.jpg') }}" alt="">-->
<!--                        <div class="gallery-one__iocn">-->
<!--                            <a href="assets/images/gallery/gallery_one_img_5.jpg" class="img-popup"><i-->
<!--                                    class="fab fa-instagram"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div><!-- /.swiper-wrapper -->
<!--        </div>-->
<!-- end .swiper-container -->
<!--    </div>-->
<!--</section>-->
<!--Gallery One End-->

<!--Brand One Start-->
<!--<section class="brand-one">-->
<!--    <div class="brand-one-bg" style="background-image: url({{ asset('asting/images/backgrounds/brand-one-bg.png') }})"></div>-->
<!--    <div class="brand-one__container">-->
<!--        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 0, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {-->
<!--            "0": {-->
<!--                "slidesPerView": 2-->
<!--            },-->
<!--            "375": {-->
<!--                "slidesPerView": 2-->
<!--            },-->
<!--            "575": {-->
<!--                "slidesPerView": 2-->
<!--            },-->
<!--            "767": {-->
<!--                "slidesPerView": 3-->
<!--            },-->
<!--            "991": {-->
<!--                "slidesPerView": 4-->
<!--            },-->
<!--            "1199": {-->
<!--                "slidesPerView": 5-->
<!--            }-->
<!--        }}'>-->
<!--            <div class="swiper-wrapper">-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-one__img">-->
<!--                        <img src="{{ asset('asting/images/brand/brand_1_img_1.png') }}" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-one__img">-->
<!--                        <img src="{{ asset('asting/images/brand/brand_1_img_2.png') }}" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-one__img">-->
<!--                        <img src="{{ asset('asting/images/brand/brand_1_img_3.png') }}" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-one__img">-->
<!--                        <img src="{{ asset('asting/images/brand/brand_1_img_4.png') }}" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="swiper-slide">-->
<!--                    <div class="brand-one__img">-->
<!--                        <img src="{{ asset('asting/images/brand/brand_1_img_5.png') }}" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div><!-- /.swiper-wrapper -->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--Brand One End-->

@endsection 