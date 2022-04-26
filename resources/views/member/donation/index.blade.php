@extends('layout.member')
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
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tanggal</th>
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
                                <td>{{ \Carbon\Carbon::parse($donation->created_at)->format('d F Y') }}</td>
                                <td>{{ $donation->program->title }}</td>
                                <td>{{ $donation->bank->bank }}</td>
                                <td>Rp. {{ number_format($donation->amount,0,',','.') }}</td>
                                <td>
                                    @if ($donation->status == 2)
                                    <label class="badge badge-success">Lunas</label>
                                    @elseif ($donation->status == 1)
                                    <label class="badge badge-info">Menunggu Konfirmasi</label>
                                    @else
                                    <label class="badge badge-danger">Belum Lunas</label>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info" href="/donatur/donasi/{{$donation->donasi_id}}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
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
</script>
@endpush