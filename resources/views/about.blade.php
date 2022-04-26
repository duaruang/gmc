@extends('layout.landing')

@section('title')
Tentang Kami
@endsection
@push('style')
<style>
	/* .card.mag{
		
	}
	.pc-mag{
		height:250px;
		object-fit: cover;
	}
	.card-b-mag{
		background-color: #fff;
		border: 1px solid #eaeaea;
		min-height: 130px;
	}
	.card.mag p{
		font-size: 14px;
	} */
	.card.mags{
		padding-left:0;
	}
	.card.mags img{
		height:100%;
		object-fit:cover;
	}
	.card.mags .card-title {
		margin-bottom: 0.1rem;
	}
	.mag p{
		font-size: 16px;
    	line-height: 24px;
	}
	#v-pills-profile p{
		font-size: 18px;
    	line-height: 24px;
	}
	@media(max-width: 768px){
		.card.mags{
			padding-left:0;
			padding-right:0;
		}
	}
</style>
@endpush
@section('content')
<section class="banner">
			<div class="basic-banner bg-black">
				<div class="owl-text-overlay left">
					<h1 class="owl-title text-arial fw-700">{{ $about->title }}</h1>
					<p class="text-arial fw-600">{{ $about->subtitle }}</p>
				</div>
				<img class="owl-img bg-mix-multiply" src="{{ $about->image_url }}" />
			</div>
		</section>

		<section class="main bg-center py-6" style="background-image: url('{{ asset('assets/images/pattern2.png') }}');">
            <div class="container-fluid px-5">
			<div class="row">
					<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><span class="badge bg-success"><a href="{{ route('home') }}">Beranda</a></span></li>
							<li class="breadcrumb-item active" aria-current="page"><span class="badge bg-primary">Tentang Kami</span></li>
						</ol>
					</nav>
					</div>
				</div>
				<h1 class="title-lg fw-700 text-uppercase mb-3">Tentang Kami</h1>
				<div class="row">
					<div class="col-lg-10 col-md-12">
						<div class="tabs single-page">
							<div class="nav flex-column nav-pills pe-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							  <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
								  <div class="title-tab fw-700">Profile Perusahaan</div>
								  <ul class="fw-500">
									  <li>Visi, Misi GMC</li>
									  <li>Sasaran GMC</li>
									  <li>Tujuan GMC</li>
									  <li>Makna Logo</li>
								  </ul>
							  </button>
							  <button class="nav-link" id="v-pills-manajemen-tab" data-bs-toggle="pill" data-bs-target="#v-pills-manajemen" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
								<div class="title-tab fw-700">Manajemen</div>
								<ul class="fw-500">
									<li>Struktur Organisasi</li>
								</ul>
							  </button>
							  <button class="nav-link" id="v-pills-legalitas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-legalitas" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
								<div class="title-tab fw-700">Legalitas</div>
								<ul class="fw-500">
									<li>Legalitas Perusahaan</li>
								</ul>
							  </button>
							  <!-- <button class="nav-link" id="v-pills-relawan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-relawan" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
								<div class="title-tab fw-700">Relawan</div>
								<ul class="fw-500">
									<li>Daftar Relawan</li>
								</ul>
							  </button> -->
							</div>
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
									{!! $about->description !!}
								</div>
								<div class="tab-pane fade" id="v-pills-manajemen" role="tabpanel" aria-labelledby="v-pills-manajemen-tab">
									<div class="mb-5">
										<h1 class="title-lg fw-700 text-green mb-5">GMC Board of Management</h1>
										<div class="container">
											<div class="row">
											@foreach($management as $data)
											<div class="card mb-3 mags" >
												<div class="row g-0">
													<div class="col-md-4">
														<img src="{{ $data->image_url }}" class="img-fluid rounded-start" alt="{{ $data->name }}">
														
													</div>
													<div class="col-md-8">
														<div class="card-body mag">
														<h5 class="card-title fw-700 title-sm text-green">{{ $data->name }}</h5>
														<p class="card-text"><span class="badge bg-success">{{ $data->jabatan }}</span></p>
															{!! $data->description !!}
														</div>
													</div>
												</div>
											</div>
											@endforeach
												
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="v-pills-legalitas" role="tabpanel" aria-labelledby="v-pills-legalitas-tab">
									<h1 class="title-lg fw-700 text-green">{{$legal->name}}</h1>
										{!! $legal->description !!}
								</div>
								<div class="tab-pane fade" id="v-pills-relawan" role="tabpanel" aria-labelledby="v-pills-relawan-tab">
									<h1 class="title-lg fw-700 text-green">Relawan</h1>
										<p>GMC adalah Organisasi charity atau amal Masyarakat Muslim dunia secara kolektif
										yang secara khusus mendedikasikan perannya dalam pembebasan kemiskinan
										Masyarakat Global berbasis charity Islam</p>
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