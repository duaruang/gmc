@extends('layout.landing')

@section('title')
Artikel
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
					<h1 class="owl-title text-arial fw-700">Artikel</h1>
					<p class="text-arial fw-600">Dapatkan informasi terkini tentang kegiatan-kegiatan GMC dalam rangka mengentaskan kemiskinan global</p>
				</div>
				<img class="owl-img bg-mix-multiply" src="{{ asset('assets/images/online-blog.jpg') }}" />
			</div>
		</section>

		<section class="main bg-center py-6" style="background-image: url('{{ asset('assets/images/pattern2.png') }}');">
            <div class="container-fluid px-5">
				<div class="row">
					<div class="col-lg-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><span class="badge bg-success"><a href="{{ route('home') }}">Beranda</a></span></li>
							<li class="breadcrumb-item active"><span class="badge bg-primary">Artikel</span></li>
						</ol>
					</nav>
					</div>
				</div>
				<div class="row single-page">
                    <div class="col-lg-8 col-md-12">
                        <div class="row ">
                        @foreach($articles as $article)
                        <div class="col-lg-4 mb-4">
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