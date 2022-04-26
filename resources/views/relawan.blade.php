@extends('layout.landing')
@section('title')
Daftar Relawan
@endsection
@push('style')
<style>
    .basic-banner img {
        height: 90px;
    }
    /*--------------------------------------------------------------
# Become Volunteer
--------------------------------------------------------------*/
.become-volunteer {
    position: relative;
    display: block;
    padding: 120px 0 120px;
}

.become-volunteer__left {
    position: relative;
    display: block;
}

.become-volunteer__img {
    position: relative;
    display: block;
    margin-bottom: 31px;
}

.become-volunteer__img img {
    width: 100%;
    border-radius: var(--thm-border-radius);
}

.become-volunteer__requirements h3 {
    font-size: 30px;
    font-family: var(--thm-font);
    line-height: 40px;
    font-weight: 500;
    margin-bottom: 29px;
}

.become-volunteer__text {
    margin: 0;
    line-height: 36px;
}

.become-volunteer__requirements-list {
    position: relative;
    display: block;
    border-bottom: 1px solid #eae5e3;
    padding-top: 45px;
    padding-bottom: 37px;
    margin-bottom: 27px;
}

.become-volunteer__requirements-list li {
    display: flex;
    align-items: center;
}

.become-volunteer__requirements-icon span {
    font-size: 26px;
    color: var(--thm-base);
    position: relative;
    top: 3px;
}

.become-volunteer__requirements-text {
    margin-left: 15px;
}

.become-volunteer__requirements-text p {
    font-size: 20px;
    color: var(--thm-black);
    margin: 0;
}

.become-volunteer__requirements-list li + li {
    margin-top: 11px;
}

.become-volunteer__mail-box {
    position: relative;
    display: block;
}

.become-volunteer__mail-box p {
    font-size: 24px;
    margin: 0;
    font-family: var(--thm-font-shadows);
    color: var(--thm-black);
}

.become-volunteer__mail-box a {
    font-size: 24px;
    color: var(--thm-primary);
}

.become-volunteer__right {
    position: relative;
    display: block;
    width:500px;
    margin-left:auto;
    margin-right:auto;
}

.become-volunteer__form {
    position: relative;
    display: block;
}

.become-volunteer__input {
    position: relative;
    display: block;
}

.become-volunteer__input input[type="text"],
.become-volunteer__input input[type="email"] {
    height: 67px;
    width: 100%;
    border: none;
    background: #f7f4f2;
    padding: 0 40px;
    margin-bottom: 20px;
    border-radius: 30px;
    outline: none;
    font-size: 16px;
    color: var(--thm-gray);
}

.become-volunteer__input textarea {
    font-size: 16px;
    color: var(--thm-gray);
    height: 180px;
    width: 100%;
    background: #f7f4f2;
    padding: 20px 40px 30px;
    border: none;
    border-radius: 40px;
    outline: none;
    margin-bottom: 10px;
}
</style>
@endpush
@section('content')
<section class="banner">
			<div class="basic-banner bg-black">
				<img class="owl-img bg-mix-multiply" />
			</div>
		</section>

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                    <h1 class="title-lg fw-700 text-center text-green mb-5">Pengajuan Relawan</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="become-volunteer__right">
                    <form class="become-volunteer__form form" action="{{ route('relawan.store') }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Nama" name="name">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="No HP" name="phone">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Tanggal Lahir (Y-m-d)" name="birth_date">
                        </div>
                        <div class="become-volunteer__input">
                            <textarea name="address" placeholder="Alamat"></textarea>
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Keahlian" name="skill">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Hobi" name="hoby">
                        </div>
                        <div class="become-volunteer__input">
                            <textarea name="work_exp" placeholder="Pengalaman Pekerjaan"></textarea>
                        </div>
                        <div class="become-volunteer__input">
                            <textarea name="organization_exp" placeholder="Pengalaman Organisasi"></textarea>
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Pendidikan Terakhir" name="last_education">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Akun Facebook" name="facebook">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Akun Instagram" name="instagram">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Akun Twitter" name="twitter">
                        </div>
                        <label class="mb-2">Upload KTP</label>
                        <div class="become-volunteer__input mb-5">
                            <input type="file" placeholder="KTP" name="ktp" accept="image/*">
                        </div>
                        <label class="mb-2">Upload Foto Close Up</label>
                        <div class="become-volunteer__input mb-5">
                            <input type="file" placeholder="Foto Close Up" name="photo" accept="image/*">
                        </div>
                        <button type="submit" class="btn-loadmore btn btn-warning text-arial fw-600 text-uppercase py-2">Kirim Pengajuan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
@endsection
