@extends('layout.admin')
@section('title')
Donatur
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Donatur</h4>
                    
                    {{-- <a class="btn btn-primary" href="{{ route('admin.donator.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a> --}}
                </div>
                <form action="/admin/export/donatur" method="post">
                <div class='row col-6'>
                @csrf
                        <div class='col-8'><input type="text" required name="date" class='form-control' value="" /></div>
                        <div class='col-4'><button class='btn btn-success' type='submit'>Export Excel</button></div>
                   
                </div> </form>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                {{-- <th>Aksi</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donators as $donator)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $donator->name }}</td>
                                <td>{{ $donator->email }}</td>
                                <td>{{ $donator->phone }}</td>
                                <td>{{ $donator->address }}</td>
                                {{-- <td>
                                    <a class="btn btn-info" href="{{ route('admin.donator.edit',$donator->donator_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="{{ route('admin.donator.destroy',$donator->donator_id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="mdi mdi-delete mdi-24px mx-0"></i>
                                        </button>
                                    </form>
                                </td> --}}
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