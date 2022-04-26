@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url({{ asset('') }});">
    <div class="container">
        <div class="page-header__inner">
            <h2>Program</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Program</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Popular Causes Three Start-->
<section class="popular-causes-three campaign-page">
    <div class="container">
        <div class="row">
            @foreach ($programs as $program)
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--Popular Causes Single-->
                <div class="popular-causes__sinlge">
                    <div class="popular-causes__img">
                        <img src="{{ $program->image_url }}" alt="">
                        {{-- <div class="popular-causes__category">
                            <p>Food</p>
                        </div> --}}
                    </div>
                    <div class="popular-causes__content">
                        <div class="popular-causes__title">
                            <h3><a href="{{ route('program.show',$program->slug) }}">{{ $program->title }}</a>
                            </h3>
                            <p>{{ $program->description_formated }}</p>
                        </div>
                        <div class="popular-causes__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="{{ $program->percent }}%">
                                    <div class="count-text"  style='margin:0px -20px 0px 0px'>{{ number_format($program->percent,2,',','.') }}%</div>
                                </div>
                            </div>
                            <div class="popular-causes__goals">
                                <p><span>Rp {{ number_format($program->total_donasi,0,',','.') }}</span> Terkumpul</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <nav class="pagination col-12">
                {{ $programs->links('vendor.pagination.custom') }}
            </nav>
        </div>
    </div>
</section>
@endsection
