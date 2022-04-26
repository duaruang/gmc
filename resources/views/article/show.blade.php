@extends('layout.landing')

@section('title')
{{ $article->title }}
@endsection

@push('style')
<style>
    .para{
        padding:10px 30px;
        background-color:#fff;
        border-radius:15px;
    }
    .single-page p {
        font-size: 18px;
        line-height: 42px;
    }
    a {
        color:#a6a6a7;
    }
</style>
@endpush

@section('content')
<section class="banner">
			<div class="basic-banner bg-black">
				<div class="owl-text-overlay left">
					<h1 class="owl-title text-arial fw-700">{{ $article->title }}</h1>
				</div>
				<img class="owl-img bg-mix-multiply" src="{{ $article->image_url }}" />
			</div>
		</section>

		<section class="main bg-center py-6" style="background-image: url('{{ asset('assets/images/pattern2.png') }}');">
            <div class="container-fluid px-5">
			<div class="row">
					<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><span class="badge bg-success"><a href="{{ route('home') }}">Beranda</a></span></li>
							<li class="breadcrumb-item"><span class="badge bg-success"><a href="{{ url('artikel') }}">Artikel</a></span></li>
							<li class="breadcrumb-item active" aria-current="page"><span class="badge bg-primary">{{ $article->slug }}</span></li>
						</ol>
					</nav>
					</div>
				</div>
				<div class="row single-page">
					<div class="col-lg-8 col-md-12">
                        
                    <div class="mb-5">
							<h2 class="title-md text-arial fw-600 text-green mb-4">{{ $article->title }}
						</div>
                        <div class="para">
                        {!! $article->content !!}
                            <br><br>
                            <small class="text-muted">Source :</small><a target="_blank" href="{{  $article->source_url }}"> {{  $article->source_url }}</a>
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
@endsection

@push('script')
@endpush