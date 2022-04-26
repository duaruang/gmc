@extends('layout.admin')
@section('title')
Kategori
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Kategori</h4>
                    
                    <a class="btn btn-primary" href="{{ route('admin.kategori.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div><form action="/admin/kategori/export_excel" method="post">
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
                                <th>Judul</th>
                                <th>Keterangan</th>
                                {{-- <th>Sampai Tanggal</th> --}}
                                {{-- <th>Tanggal</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $kategori)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kategori->nama }}</td>
                                <td>{{ $kategori->keterangan }}</td>
                                {{-- <td>{{ \Carbon\Carbon::parse($kategori->ended_at)->format('F d m Y') }}</td> --}}
                                {{-- <td>{{ \Carbon\Carbon::parse($kategori->created_at)->format('F d m Y') }}</td> --}}
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.kategori.show',$kategori->kategori_id) }}">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{ route('admin.kategori.edit',$kategori->kategori_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="{{ route('admin.kategori.destroy',$kategori->kategori_id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-delete">
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