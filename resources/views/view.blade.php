@extends('layout.landing')

@section('title')
{{ $program->title }}
@endsection

@push('style')
<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    @media (max-width: 767px) {
        .card-img-top {
            height: auto;
        }
    }

    /* external css: flickity.css */

    /* external css: flickity.css */

    * {
        box-sizing: border-box;
    }

    body {
        font-family: sans-serif;
        overflow-x: hidden;
    }

    /* parallax */

    .parallax {
        position: relative;
        overflow-x: hidden;
        overflow-y: hidden;
        height: 360px;
    }

    .next {
        margin-right: 120px;
    }

    .previous {
        margin-left: 120px;
    }

    .parallax__layer {
        position: absolute;
        left: 0;
        top: 0;
    }

    .parallax__layer--bg {
        top: 10px;
        width: 80%;
        height: 260px;
    }

    .parallax__layer--fg {
        /* pointer-events: none; */
        width: 125%;
        height: 100px;
    }

    .parallax__layer__cell {
        position: absolute;
        width: 50%;
        margin: 0 5%;
        height: 100%;
    }

    .parallax__layer__cell:nth-child(1) {
        left: 0%;
    }

    .parallax__layer__cell:nth-child(2) {
        left: 60%;
    }

    .parallax__layer__cell:nth-child(3) {
        left: 120%;
    }

    .parallax__layer__cell:nth-child(4) {
        left: 180%;
    }

    .parallax__layer__cell:nth-child(5) {
        left: 240%;
    }

    .parallax__layer__cell--bg {
        background: hsla(210, 100%, 50%, 0.4);
    }

    .parallax__layer__cell--fg {
        /* background: hsla(60, 100%, 50%, 0.4); */
    }

    /* carousel */

    .carousel-cell {
        height: 220px;
        width: 50%;
        margin: 40px 1%;
        /* total width = 50% + 5% + 5% = 60% */
        /* background: #8C8; */
        opacity: 0;
        border-radius: 10px;
        counter-increment: carousel-cell;
    }

    /* cell number */
    .carousel-cell:before {
        display: block;
        text-align: center;
        content: counter(carousel-cell);
        line-height: 200px;
        font-size: 80px;
        color: white;
    }

    .section-title h2 {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        padding-bottom: 6px;
        color: #000;
        letter-spacing: 0.3px;
        padding: 0;
    }

    .section-title::after {
        content: "";
        height: 3px;
        background: #fbb900;
        width: 80px;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
    }

    @-webkit-keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    /* .owl-item, .active, .cloned{
    width:500px;
} */
    .slider {
        background: white;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .slider::before,
    .slider::after {
        background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }

    .slider::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }

    .slider::before {
        left: 0;
        top: 0;
    }

    .slider .slide-track {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }

    .slider .slide {
        height: 300px;
        width: 550px;
    }

    a.active {
        border-bottom: 2px solid #55c57a
    }

    .form-control {
        background-color: rgb(241, 243, 247);
        border: none
    }

    .form-control:focus {
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 7px rgba(0, 0, 0, 0.2)
    }

    #grad1 {
        background-color: : #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA)
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue
    }

    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #000000
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative
    }

    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f023"
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue
    }

    .radio-group {
        position: relative;
        margin-bottom: 25px
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }
</style>
@endpush

@section('content')
<!-- Home Jumbotron
    ================================================== -->

<!-- Container
================================================== -->
<div class="container">
    <div class="main-content">
        <!-- Posts Index
    ================================================== -->
        <section class="recent-posts row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h1><span>Program GMC</span></h1>
                </div>
                <div class="masonrygrid row listrecent">
                    <!-- begin post -->
                    <div class="col-md-6 grid-item">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top" src="{{ $program->image_url }}" alt="{{ $program->title }}">
                            </a>
                            <div class="card-block">
                                <h2 class="card-title"><a href="#">{{ $program->title }}</a></h2>
                                <p class="text-justify">
                                    {{ $program->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end post -->
                    <!-- begin post -->
                    <div class="col-md-6 grid-item">
                        <div class="card">
                            <form id="msform" action="{{ route('donasi.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="program_id" value="{{ $program->program_id }}">
                                <!-- progressbar -->
                                <ul id="progressbar" class="mx-auto">
                                    <li class="active" id="account"><strong>Isi Form</strong></li>
                                    <li id="personal"><strong>Bank Akun</strong></li>
                                </ul> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h3>Jumlah Donasi</h3>
                                        <hr>
                                        <label>Pilih Rekening</label>
                                        <select name="bank" class='form-control'>
                                            @foreach ($banks as $bank)
                                            <option value="{{ $bank->bank_id }}">{{ $bank->bank }}</option>
                                            @endforeach
                                        </select>
                                        <label>Pilih Jumlah</label>
                                        <div class="row btn-amount btn-group-toggle" data-toggle="buttons">
                                            <button class="col-5 mb-2 mx-auto btn btn-outline-primary btn-primary">
                                                <input type="radio" name="amount" value="250000" autocomplete="off"> Rp. 250.000
                                            </button>
                                            <button class="col-5 mb-2 mx-auto btn btn-outline-primary btn-primary">
                                                <input type="radio" name="amount" value="500000" autocomplete="off"> Rp. 500.000
                                            </button>
                                            <button class="col-5 mb-2 mx-auto btn btn-outline-primary btn-primary">
                                                <input type="radio" name="amount" value="1000000" autocomplete="off"> Rp. 1.000.000
                                            </button>
                                            <button class="col-5 mb-2 mx-auto btn btn-outline-primary btn-primary">
                                                <input type="radio" name="amount" value="2500000" autocomplete="off"> Rp. 2.500.000
                                            </button>
                                        </div>
                                        <label>Jumlah Lain</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            <input type="number" name="custom" class="form-control" id="custom">
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" id="btn-next" value="Selanjutnya" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Informasi Donatur</h2>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" name="name" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">No HP</label>
                                                    <input type="text" name="phone" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <input type="button" name="previous" class="previous action-button-previous" value="Sebelumnya" /> --}}
                                        <button class="next action-button btn-submit" id="btn-done">Selesai</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- end post -->
                </div>
                <!-- Pagination -->

            </div>
        </section>
    </div>
</div>
<!-- /.container -->
@endsection

@push('script')
<script>
    $(document).ready(function() {
        alert('a');
        $('#btn-next').attr('disabled', true);
        $('#btn-done').attr('disabled', true);

        $('.btn-amount > button').click(function() {
            $('#btn-next').attr('disabled', false);
            $('#custom').val('');
        });

        $('#custom').on('keyup', function() {
            $('#btn-next').attr('disabled', false);
            $('.btn-amount > button').removeClass('active');
            $('[name="amount"]:checked').prop('checked', false);
        });

        $('.donatur').on('keyup',function(){
            check();
        });
    });

    function check(){
        var name = $('[name="name"]').val();
        var phone = $('[name="phone"]').val();
        var email = $('[name="email"]').val();
        if(name == '' || phone == '' || email == ''){
            $('#btn-done').attr('disabled', true);
        }else{
            $('#btn-done').attr('disabled', false);
        }
    }

    var $carousel = $('.carousel').flickity();
    var $background = $('.parallax__layer--bg');
    var $foreground = $('.parallax__layer--fg');

    var cellRatio = 0.6; // outerWidth of cell / width of carousel
    var bgRatio = 0.8; // width of background layer / width of carousel
    var fgRatio = 1.25; // width of foreground layer / width of carousel

    var flkty = $carousel.data('flickity');
    var count = flkty.slides.length - 1;

    $carousel.on('scroll.flickity', function(event, progress) {
        moveParallaxLayer($background, bgRatio, progress);
        moveParallaxLayer($foreground, fgRatio, progress);
    });
    // trigger initial scroll
    $carousel.flickity('reposition');

    function moveParallaxLayer($layer, layerRatio, progress) {
        var ratio = cellRatio * layerRatio;
        $layer.css({
            left: (0.5 - (0.5 + progress * count) * ratio) * 100 + '%'
        });
    }
    // $(document).ready(function()
    // {


    // if($('.bbb_viewed_slider').length)
    // {
    // var viewedSlider = $('.bbb_viewed_slider');

    // viewedSlider.owlCarousel(
    // {
    // loop:true,
    // margin:30,
    // autoplay:true,
    // autoplayTimeout:6000,
    // nav:false,
    // dots:false,
    // responsive:
    // {
    // 0:{items:1},
    // 575:{items:2},
    // 768:{items:3},
    // 991:{items:4},
    // 1199:{items:6}
    // }
    // });

    // if($('.bbb_viewed_prev').length)
    // {
    // var prev = $('.bbb_viewed_prev');
    // prev.on('click', function()
    // {
    // viewedSlider.trigger('prev.owl.carousel');
    // });
    // }

    // if($('.bbb_viewed_next').length)
    // {
    // var next = $('.bbb_viewed_next');
    // next.on('click', function()
    // {
    // viewedSlider.trigger('next.owl.carousel');
    // });
    // }
    // }


    // });
</script>
@endpush
