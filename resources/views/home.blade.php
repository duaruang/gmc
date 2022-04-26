@extends('layout.landing')

@section('title')
Beranda
@endsection

@push('style')

<style>
	.bg-single-img{
		width: 100%;
		height: 100%;
		content: "";
		/* background-color: rgb(38 62 14 / 40%); */
		position: absolute;
		/* padding-top: 0; */
		margin-top: -48px;
	}
</style>
@endpush

@section('content')
<section class="banner">
			<div class="carousel">
				<div class="owl-carousel owl-theme owl-banner">
					@foreach($slider as $data)
					<div class="item bg-green">
						<div class="owl-text-overlay right text-right">
							<h1 class="owl-title">{{ $data->title }}</h1>
							<p class="text-arial fw-600">{{ $data->subtitle }}</p>
							@if($data->is_button == 1)
							<a href="{{ $data->button_link }}" class="btn btn-warning">{{ $data->button_name }}</a>
							@endif
						</div>
						<img class="owl-img bg-mix-multiply" src="{{ $data->image_url }}">
					</div>
					@endforeach
				</div>
			</div>
		</section>

        <section class="main bg-center bg-opacity" style="background-image: url('{{ asset('assets/images/bg-map.png') }}');">
            <div class="container">
                <div class="content">
					<div class="row">
						<div class="col-lg-9 mx-auto">
							<div class="section-hero text-center">
								<p class="text-myriad text-18">{{ $lain->caption1 }}</p>
								<h1 class="title-lg fw-700 text-green">{{ $lain->big_caption1 }}</h1>
							</div>
						</div>
					</div>
					<div class="boxes" data-aos="fade-up" data-aos-duration="1000">
						<?php $i=2; ?>
						@foreach($programs as $data)
						<a href="#" class="item-box bg-green-blend" style="background-image: url('{{ $data->image_url }}');">
							<div class="icon-box">
								<img src="{{ asset('images/program/'.$data->icon) }}" class="icon-item" alt="Icons" />
								<span class="icon-link text-uppercase">{{ $data->title }}</span>
							</div>
						</a>
						<?php 
						$i++;
						if ($i % 4 == 0) {echo '</div><div class="boxes" data-aos="fade-up" data-aos-duration="1000">';}
						?>
						@endforeach
					</div>
				</div>
				<br /><br />
            </div>
        </section>

		<section class="main bg-center" style="background-image: url('{{ asset('assets/images/bg-shape.png') }}');">
            <div class="container">
				<div id="counter" class="counts">
					<div class="count-item text-center">
						<img src="{{ asset('assets/images/icons/icon-program-11.png') }}" class="sm-icon mb-2" alt="Icon">
						<h3 class="fw-800"><span class="counter-value" data-count="37,413,252">37,413,252</span></h3>
						<span class="count-text">Penerima Manfaat</span>
					</div>
					<div class="count-item text-center">
						<img src="{{ asset('assets/images/icons/icon-program-12.png') }}" class="sm-icon mb-2" alt="Icon">
						<h3 class="fw-800"><span class="counter-value" data-count="120">120</span>+</h3>
						<span class="count-text">Donatur</span>
					</div>
					<div class="count-item text-center">
						<img src="{{ asset('assets/images/icons/icon-program-13.png') }}" class="sm-icon mb-2" alt="Icon">
						<h3 class="fw-800"><span class="counter-value" data-count="5,310">5,310</span>+</h3>
						<span class="count-text">Relawan</span>
					</div>
					<div class="count-item text-center">
						<img src="{{ asset('assets/images/icons/icon-program-14.png') }}" class="sm-icon mb-2" alt="Icon">
						<h3 class="fw-800"><span class="counter-value" data-count="34">34</span></h3>
						<span class="count-text">Negara Jangkauan</span>
					</div>
					<div class="count-item text-center">
						<img src="{{ asset('assets/images/icons/icon-program-15.png') }}" class="sm-icon mb-2" alt="Icon">
						<h3 class="fw-800"><span class="counter-value" data-count="231">231</span></h3>
						<span class="count-text">Aktifitas</span>
					</div>
				</div>
			</div>
		</section>

		<section class="main bg-center pt-6">
            <div class="container">
				<div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-6 col-md-12">
						<div class="grid-image">
							<img src="{{ asset('images/tentang') }}/{{$about->home_image}}" class="img-fluid" alt="Image" />
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="grid-section">
							<h1 class="title-lg fw-700 text-green mb-5">{{ $about->home_title }}</h1>
							<p class="text-18">{{ $about->home_desc }}</p>
						</div>
					</div>
				</div>
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-8 col-md-12 mx-auto">
						<div class="section-hero text-center">
							<br />
							<p class="text-myriad text-18 mb-4">{{ $lain->caption2 }}</p>
							<h1 class="title-lg fw-700 text-green">{{ $lain->big_caption2 }}</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="abs-img dot" style="left: -100px; top: -23px;">
				<img src="{{ asset('assets/images/dot-black.png') }}" />
			</div>
			<div class="abs-img dot" style="right: 30px; top: 10%; z-index: -1;">
				<img src="{{ asset('assets/images/dot-green.png') }}" />
			</div>
			<div class="abs-img bar" style="left: 0; bottom: 0; z-index: -1;">
				<img src="{{ asset('assets/images/bar-up.png') }}" />
			</div>
			<div class="abs-img bar" style="right: 12%; bottom: 15%; z-index: -1;">
				<img src="{{ asset('assets/images/bar-down.png') }}" />
			</div>
			<div class="abs-img spiral" style="right: 0; bottom: -2px;">
				<img src="{{ asset('assets/images/spiral.png') }}" />
			</div>
		</section>
		<section class="main bg-zoom overflow-hidden py-7" style="background-image: url('{{ asset('assets/images/'.$lain->postdig_image) }}');">
			<div class="bg-gradient bottom">
				<img src="{{ asset('assets/images/bg-gradient.png') }}" />
			</div>
			<div class="abs-img circle" style="right: -90px; bottom: -16px;">
				<img src="{{ asset('assets/images/circle.png') }}" />
			</div>
			<div class="abs-center" style="left: 20px">
				<img src="{{ asset('assets/images/dot-vertical.png') }}" />
			</div>
            <div class="container">
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-8 col-md-12">
						<div class="big-hero">
							<h1 class="title-xl text-white fw-600 mb-4">{{ $lain->postdig_text }}</h1>
							@if($lain->postdig_active == 1)
								<a target="_blank" href="{{ $lain->postdig_button_link }}" class="btn btn-warning btn-xl text-uppercase">{{ $lain->postdig_button_name }}</a>
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="main bg-center py-5" style="background-image: url('{{ asset('assets/images/'.$lain->image) }}');">
			<div class="bg-single-img" ><img src="{{ asset('assets/images/person-donate.png') }}" class="img-right" />
				<!-- <img src="{{ asset('assets/images/person-donate.png') }}" class="img-right" />
				<img src="{{ asset('assets/images/wave.png') }}" class="img-right" /> -->
			</div>
            <div class="container">
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-md-7 mx-auto">
						<div class="big-hero text-center">
							<a href="{{ $lain->link_button }}" class="btn btn-warning btn-xl text-arial fw-600 text-uppercase mb-3">Donasi</a>
							<p class="fw-500 text-14">{{ $lain->caption_banner }}</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="main bg-center py-7" style="background-image: url('{{ asset('assets/images/pattern1.png') }}');"> -->
		<section class="main bg-center py-7">
            <div class="container-fluid px-5">
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-3 col-md-12">
						<div class="article-summary mt-4">
							<h1 class="title-lg fw-700 mb-3">Artikel</h1>
							<p class="fw-600 mb-4">{{ $lain->article_desc }}</p>
							<a href="{{ url('artikel') }}" class="btn-loadmore btn btn-warning text-arial fw-600 text-uppercase py-2">Lihat Lainnya</a>
						</div>
					</div>

					<div class="col-lg-9 col-md-12">
						<div class="row">
						@foreach ($articles as $article)
							<div class="col-lg-4 col-md-12">
								<div class="article-card">
									<img src="{{ $article->image_url }}" alt="Article" />
									<div class="article-info">
										<a href="#" class="article-title fw-600 text-blue">{!! ucfirst(strtolower($article->title)) !!}</a>
										<p class="fw-500 text-12">{!! shorter(strip_tags($article->content),70) !!}</p>
										<a href="{{ route('article.show',$article->slug) }}" class="card-link text-13 fw-600">Selengkapnya...</a>
										<div class="article-date bg-blue">
											<span class="article-day fw-600">{{ date('d',strtotime($article->published_at)) }}</span>
											<span class="article-month fw-600 text-uppercase">{{ date('M',strtotime($article->published_at)) }}</span>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row loadmore">
							<div class="col-md-12 text-center">
								<a href="{{ url('artikel') }}" class="btn-loadmore btn btn-warning text-arial fw-600 text-uppercase py-2">Lihat Lainnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
    @endsection
    @push('script')
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.js') }}"></script>
    <script>
			$( document ).ready(function() {
				$('.owl-banner').owlCarousel({
					items: 1,
					autoplay: true,
					autoplayTimeout: 5000,
					center: true,
					loop: true,
					dots:true,
				});
				$('.counter-value').counterUp({
					delay: 10,
					time: 2500
				});
			});
    </script>
    @endpush