@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Relawan</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Relawan</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            @foreach($volunteers as $volunteer)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <!--Meet Volunteers One Single-->
                <div class="meet-volunteers-one__single">
                    <div class="meet-volunteers-one__content">
                        <div class="meet-volunteers-one__img">
                            <img src="{{ $volunteer->photo_url }}" alt="">
                        </div>
                        <div class="meet-volunteers-one__name">
                            <h3>{{ $volunteer->name }}</h3>
                        </div>
                        <div class="meet-volunteers-one__social-info">
                            <div class="left">
                                <p>Relawan</p>
                            </div>
                            <div class="meet-volunteers-one__social-info-box">
                                <a href="mailto:{{ $volunteer->email }}"><i class="fas fa-envelope"></i></a>
                                <a target="_blank" href="https://www.facebook.com/{{ $volunteer->facebook }}"><i class="fab fa-facebook-square"></i></a>
                                <a target="_blank" href="https://www.instagram.com/{{ $volunteer->instagram }}"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://www.twitter.com/{{ $volunteer->twitter }}"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection
