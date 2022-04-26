@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url({{ asset('asting/images/backgrounds/page-header-bg.jpg') }});">
    <div class="container">
        <div class="page-header__inner">
            <h2>Invoice</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Invoice</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Campaign Details Start-->
<section class="campaign-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="text-center mb-4">
                    <h4>Hampir selesai</h4>
                    <span>Silahkan kirim bukti pembayaran anda</span>
                </div>
                <h4 class="text-center mb-2">Invoice Donasi</h4>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Tanggal</div>
                    <div class="font-weight-bold">
                        {{ \Carbon\Carbon::parse($donasi->created_at)->format('d-m-Y') }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Program</div>
                    <div class="font-weight-bold">
                        {{ $donasi->program->title }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Nomor Invoice</div>
                    <div class="font-weight-bold">
                        #{{ $donasi->nomor }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Bank</div>
                    <div class="font-weight-bold">
                        {{ $donasi->bank->bank }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Rekening Bank</div>
                    <div class="font-weight-bold">
                        {{ $donasi->bank->number }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Atas Nama</div>
                    <div class="font-weight-bold">
                        {{ $donasi->bank->name }}
                    </div>
                </div>
                <div class="d-flex mb-2 justify-content-between">
                    <div>Jumlah Donasi</div>
                    <div class="font-weight-bold">
                        {{ number_format($donasi->amount,0,',','.') }}
                    </div>
                </div>
                <div class="text-center my-4">
                    Silahkan transfer sesuai dengan jumlah dan rekening yang tertera di invoice.
                </div>
                <div>
                    <form id="msform" action="/invoice/prove" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Bukti Pembayaran</label>
                            <input type='file' name='image' class='form-control' accept='.png,.jpg,.jpeg'><br>
                            <input type='hidden' value='{{$donasi->donasi_id}}' name='donasi_id'>
                        <button type='submit' class="btn btn-block btn-primary">
                            <i class="fa fa-save"></i> Kirim bukti pembayaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Campaign Details End-->
@endsection
