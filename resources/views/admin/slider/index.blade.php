@extends('layout.admin')
@section('title')
Slider
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">List Slider</h4>
                    <a class="btn btn-primary" href="{{ route('admin.slider.create') }}">
                        <i class="mdi mdi-plus mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <table class="table datatables">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Sub Judul</th>
                                <th>Tombol Aktif</th>
                                <th>Nama Tombol</th>
                                <th>Link Tombol</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slider as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->subtitle }}</td>
                                <td>{{ $data->is_button == 1 ? "Ya" : "Tidak" }}</td>
                                <td>{{ $data->button_name }}</td>
                                <td>{{ $data->button_link }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.slider.show',$data->slider_id) }}">
                                        <i class="mdi mdi-eye mdi-24px mx-0"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{ route('admin.slider.edit',$data->slider_id) }}">
                                        <i class="mdi mdi-pencil mdi-24px mx-0"></i>
                                    </a>
                                    <form action="{{ route('admin.slider.destroy',$data->slider_id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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