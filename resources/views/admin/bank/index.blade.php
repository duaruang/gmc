@extends('layout.admin')
@section('title')
Bank
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Bank</h4>
                    <a class="btn btn-primary" href="{{ route('admin.bank.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Bank</th>
                                <th>Atas Nama</th>
                                <th>No Rekening</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banks as $bank)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bank->bank }}</td>
                                <td>{{ $bank->name }}</td>
                                <td>{{ $bank->number }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.bank.edit',$bank->bank_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="{{ route('admin.bank.destroy',$bank->bank_id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="mdi mdi-delete mdi-24px mx-0"></i>
                                        </button>
                                    </form>
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