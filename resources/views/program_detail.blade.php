@extends('layout.landing')

@section('title')
Program
@endsection

@section('content')
<section class="banner">
			<div class="basic-banner bg-black">
				<div class="owl-text-overlay left">
					<h1 class="owl-title text-arial fw-700">REBUT KEMBALI PALESTINA</h1>
					<p class="text-arial fw-600">Penjajahan, pengeboman, pembunuhan, penyiksaan dan
						pengusiran oleh Zionis masih terjadi di tanah Palestina! Jangan
						diam, mari tengadahkan tangan dan berdoa, lalu sisihkan harta
						terbaik kita untuk REBUT KEMBALI PALESTINA!</p>
				</div>
				<img class="owl-img bg-mix-multiply" src="{{ asset('assets/images/image3.jpg') }}" />
			</div>
		</section>

		<section class="main bg-center py-6" style="background-image: url('{{ asset('assets/images/pattern2.png') }}');">
            <div class="container-fluid px-5">
				<div class="row single-page">
					<div class="col-lg-8 col-md-12">
						<div class="mb-5">
							<h2 class="title-md text-arial fw-600 text-green mb-4">{{ $description }}
						</div>
						<div class="mb-5">
							<h2 class="title-md text-arial fw-600 text-green mb-4">Gerakan Ekonomi Pesantren</h2>
							<p>Gerakan Ekonomi Pesantren, Pemberdayaan kreativitas para santri dengan pelatihan
								usaha, dari mikro sampai makro. Yang di harapkan kedepannya bisa memberikan
								kemandirian untuk para santri yang berdampak kemajuan untuk para pesantren yang
								menaunginya. ekonomi bangkit, umat sejahtera.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="side-column">
							<div class="panel-card text-center mb-5">
								<div class="panel-card-header bg-green fw-500 text-white">Informasi Rekening</div>
								<div class="panel-card-body">
									<img src="{{ asset('assets/images/bank.png') }}" class="mb-3" alt="Bank" />
									<span class="fw-600">A Lorem Ipsum</span>
								</div>
							</div>
							<div class="media-card">
								<img src="{{ asset('assets/images/media1.png') }}" class="mb-4" alt="Media" />
								<img src="{{ asset('assets/images/media2.png') }}" class="mb-4" alt="Media" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection

@push('script')
@endpush