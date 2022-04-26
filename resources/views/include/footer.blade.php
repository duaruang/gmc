<div class="footer-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
						<div class="footer-content">
							<a href="{{ url('/') }}">
								<img class="logo-img" src="{{ asset('assets/images/logo-white.png') }}" alt="Logo" />
							</a>
							<p class="text-gray-100 text-20">Dukung dan ikuti sosial media kami untuk mendapatkan update informasi seputar kegiatan GMC</p>
							<ul class="footer-social">
								<li>
									<a target="_blank" href="{{$setting->link_twitter}}" class="bg-twitter">
										<i class="bi bi-twitter"></i>
									</a>
								</li>
								<li>
									<a target="_blank" href="{{$setting->link_fb}}" class="bg-fb">
										<i class="bi bi-facebook"></i>
									</a>
								</li>
								<li>
									<a target="_blank" href="{{$setting->link_yt}}" class="bg-yt">
										<i class="bi bi-youtube"></i>
									</a>
								</li>
								<li>
									<a target="_blank" href="{{$setting->link_ig}}" class="bg-ig">
										<i class="bi bi-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-content">
							<h3>Halaman</h3>
							<ul>
								<li><a href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
								<li><a href="{{ url('tentang-kami') }}">Manajemen</a></li>
								<li><a href="{{ url('artikel') }}">Artikel</a></li>
								<li><a href="{{ url('video') }}">Video</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-content">
							<h3>Kontak</h3>
							<ul class="footer-contact">
								<li>
									<div class="me-4">
										<i class="bi bi-telephone-fill"></i>
									</div>
									<div>
										<div class="mb-1">{{$setting->kontak1_phone}} {{$setting->kontak1_name}}</div>
										<div>{{$setting->kontak2_phone}} {{$setting->kontak2_name}}</div>
									</div>
								</li>
								<li>
									<div class="me-4">
										<i class="bi bi-envelope-fill"></i>
									</div>
									<div>
									<a href="mailto:{{$setting->email}}" style="color:#fff;"><span>{{$setting->email}}</span></a>
									</div>
								</li>
								<li>
									<div class="me-4">
										<i class="bi bi-geo-alt-fill"></i>
									</div>
									<div>
										{!! $setting->address !!}
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="footer-content">
							<h3>Bantuan</h3>
							<p class="text-gray-100 text-20">{!! $setting->bantuan !!}</p>
						</div>
					</div>
                </div>
            </div>