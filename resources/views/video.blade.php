@extends('layout.landing')

@section('title')
Video
@endsection
@push('style')
<style>
.article-card {
    background-color: #ffffff;
    border: 1px solid #eaeaea;
}
.side-column {
	margin-top:0;
}
</style>
@endpush

@section('content')
<section class="banner">
			<div class="basic-banner bg-green">
				<div class="owl-text-overlay left">
					<h1 class="owl-title text-arial fw-700">Video</h1>
					<p class="text-arial fw-600">Dapatkan informasi terkini tentang kegiatan-kegiatan GMC dalam rangka mengentaskan kemiskinan global</p>
				</div>
				<img class="owl-img bg-mix-multiply" src="{{ asset('assets/images/image3.jpg') }}" />
			</div>
		</section>

		<section class="main bg-center py-6" style="background-image: url('{{ asset('assets/images/pattern2.png') }}');">
            <div class="container-fluid px-5">
				<div class="row">
					<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><span class="badge bg-success"><a href="{{ route('home') }}">Beranda</a></span></li>
							<li class="breadcrumb-item active"><span class="badge bg-primary">Video</span></li>
						</ol>
					</nav>
					</div>
				</div>
				<div class="row single-page">
                    <div class="col-lg-8 col-md-12">
                        <div class="row ">
                        @foreach($videos as $video)
                        <div class="col-lg-4 mb-5">
                            <div class="become-volunteer__left">
                                <iframe width="100%" height="250" src="{{ $video->url }}" title="{{ $video->title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <p>{{$video->title}}</p>
                        </div>
                        @endforeach
                    </div>
                    </div>
					<div class="col-lg-4 col-md-12">
						<div class="side-column">
							<div class="panel-card text-center mb-5">
								<div class="panel-card-header bg-green fw-500 text-white">Informasi Rekening</div>
								<div class="panel-card-body">
									@foreach($bank as $data)
									<span class="fw-600">{{ $data->bank}} {{$data->number}} <br> a/n {{$data->name}}</span>
									@endforeach
								</div>
							</div>
							<div class="media-card">
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
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="main bg-center py-5" style="background-image: url('{{ $lain->image_url }}');">
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
@endsection

@push('script')
@endpush