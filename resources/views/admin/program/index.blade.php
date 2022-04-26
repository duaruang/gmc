@extends('layout.admin')
@section('title')
Program
@endsection
@push('style')
<style>
    .table td img, .jsgrid .jsgrid-table td img {
    width: 200px !important;
    height: auto;
    border-radius: 0;
}
</style>
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Program</h4>
                    <a class="btn btn-primary" href="{{ route('admin.program.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <form action="/admin/export/program" method="post">
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
                                <th>Sub Judul</th>
                                <th>Image Banner</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($programs as $program)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $program->title }}</td>
                                <td>{{ $program->title }}</td>
                                <td><img src="{{ $program->image_url }}" class="img-thumbnail" alt=""></td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.program.show',$program->program_id) }}">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{ route('admin.program.edit',$program->program_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="{{ route('admin.program.destroy',$program->program_id) }}" method="POST" class="d-inline-block">
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