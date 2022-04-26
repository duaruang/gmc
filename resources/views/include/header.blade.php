<nav class="top-header bg-green">
				<div class="container-fluid p-0">
					<div class="top-links">
						<div class="cs text-white">
							<i class="bi bi-envelope-fill me-2"></i>
							<a target="_blank" href="mailto:{{$setting->email}}" style="color:#fff;"><span>{{$setting->email}}</span></a>
						</div>
						<div class="social">
							<span class="me-3">Follow Us:</span>
							<ul class="header-social">
								<li>
									<a href="{{$setting->link_twitter}}" target="_blank" class="text-twitter">
										<i class="bi bi-twitter"></i>
									</a>
								</li>
								<li>
									<a href="{{$setting->link_fb}}" target="_blank" class="text-fb">
										<i class="bi bi-facebook"></i>
									</a>
								</li>
								<li>
									<a href="{{$setting->link_yt}}" target="_blank" class="text-yt">
										<i class="bi bi-youtube"></i>
									</a>
								</li>
								<li>
									<a href="{{$setting->link_ig}}" target="_blank" class="text-ig">
										<i class="bi bi-instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<nav class="bottom-header navbar navbar-expand-lg navbar-light p-0">
				<div class="container">
					<div class="nav-wrapper">
						<div class="main-nav">
							<div class="logo">
								<a class="navbar-brand" href="{{ url('/') }}">
									<img src="{{ $setting->image_url }}" class="logo-img" alt="Logo" />
								</a>
								<div class="cta-nav">
									<a href="{{$setting->link_nav}}" target="_blank" class="btn-nav btn btn-warning">Donasi</a>
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
										<i class="bi bi-list"></i>
									</button>
								</div>
							</div>
							<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
								<div class="navbar-nav">
									<a class="nav-link @if(Route::is('home')) active @endif" href="{{ url('/') }}">Beranda</a>
									<a class="nav-link @if(Route::is('tentang')) active @endif" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
									<a class="nav-link @if(Route::is('article')) active @endif" href="{{ url('/artikel') }}">Artikel</a>
									<a class="nav-link @if(Route::is('video')) active @endif" href="{{ url('/video') }}">Video</a>
									
								</div>
								<a href="{{$setting->link_nav}}" target="_blank" class="btn-nav btn btn-warning">Donasi</a>
							</div>
						</div>
					</div>
				</div>
			</nav>