@extends('layout.admin')
@section('title')
Video
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Management</h4>
                    <a class="btn btn-primary" href="{{ route('admin.management.new') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td><?= shorter(strip_tags($data->description),70) ?></td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.management.show',$data->management_id) }}">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{ route('admin.management.edit',$data->management_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class='btn btn-danger' href="{{ route('admin.management.destroy',$data->management_id) }}"><i class="mdi mdi-delete mdi-24px mx-0"></i></a>
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
