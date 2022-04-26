@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Video</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Video</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            @foreach($videos as $video)
            <div class="col-xl-6 col-lg-12">
                <div class="become-volunteer__left">
                    <iframe width="500" height="300" src="{{ $video->url }}" title="{{ $video->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <h3>{{$video->title}}</h3>
                <p>{{$video->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection 