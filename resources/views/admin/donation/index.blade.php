@extends('layout.admin')
@section('title')
Donasi
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Donasi</h4>
                    <a class="btn btn-primary" href="{{ route('admin.program.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <form action="/admin/export/donasi" method="post">
                <div class='row col-6'>
                @csrf
                        <div class='col-8'><input type="text" required name="date" class='form-control' value="" /></div>
                        <div class='col-4'><button class='btn btn-success' type='submit'>Export Excel</button></div>

                    </div>
                </form>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Unix</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Program</th>
                                <th>Bank</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $donation->nomor }}</td>
                                <td>{{ \Carbon\Carbon::parse($donation->created_at)->format('d F Y') }}</td>
                                <td>{{ $donation->user->name }}</td>
                                <td>{{ $donation->program->title }}</td>
                                <td>{{ $donation->bank->bank }}</td>
                                <td>Rp. {{ number_format($donation->amount,0,',','.') }}</td>
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
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.donation.show',$donation->donasi_id) }}">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $('.datatables').DataTable();

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
