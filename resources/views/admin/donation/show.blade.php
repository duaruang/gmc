@extends('layout.admin')
@section('title')
Detail Donasi
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Detail Donasi</h4>
                    <a href="{{ route('admin.donation.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>

                <div class="row">
                    <div class="col-md-6">
                        <table class="w-100">
                            <tr>
                                <td>Nama Donatur</td>
                                <td>:</td>
                                <td>{{ $donation->user->name }}</td>
                            </tr>
                            <tr>
                                <td>Program</td>
                                <td>:</td>
                                <td>{{ $donation->program->title }}</td>
                            </tr>
                            <tr>
                                <td>Bank Tujuan</td>
                                <td>:</td>
                                <td>{{ $donation->bank->bank }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Donasi</td>
                                <td>:</td>
                                <td>Rp. {{ number_format($donation->amount,0,',','.') }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="w-100">
                            <tr>
                                <td>Tanggal Donasi</td>
                                <td>:</td>
                                <td>{{ \Carbon\Carbon::parse($donation->created_at)->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    @if ($donation->status==2)
                                    <label class="badge badge-success">Lunas</label>
                                    @elseif ($donation->status==0)
                                    <label class="badge badge-danger">Belum Membayar</label>
                                    @else
                                    <form action="{{ route('admin.donation.approve',$donation->donasi_id) }}" method="POST">
                                        @csrf
                                        <label class="badge badge-info label-approve" style="cursor: pointer">Menunggu Konfirmasi</label>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                            @if ($donation->status != 0)
                            <tr>
                                <td>Tanggal Approve</td>
                                <td>:</td>
                                <td>{{ \Carbon\Carbon::parse($donation->updated_at)->format('d F Y') }}</td>
                            </tr>
                            @endif
                        </table>
                    </div>
                </div>
                @if ($donation->status != 0)
                <hr class="m-2">
                <h5>Bukti Pembayaran</h5>
                <img src="{{ asset('images/prove/'.$donation->prove->image) }}" alt="">
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')
<script>
    $('.label-approve').on('click',function(){
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Apakah anda yakin ingin mengkonfirmasi pembayaran ini?',
            text: "Anda tidak akan bisa memulihkanya kembali!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, konfirmasi!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                showLoading();
                form.submit();
            }
        });
    });
</script>
@endpush
