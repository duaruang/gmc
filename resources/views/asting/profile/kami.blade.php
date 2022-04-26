@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Tentang Kami</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Tentang Kami</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="become-volunteer__left">
                    <?= $data->description?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection
