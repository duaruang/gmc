@extends('layout.admin')
@section('title')
Tampilan Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Show Management</h4>
                    <a href="{{ route('admin.management.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div><br>
                <div class="row">
                    <div class='col-md-6'>
                        <label>Nama:</label><br>
                        <h4><?= $data->name ?></h4>
                        <label>Jabatan:</label><br>
                        <h4><?= $data->jabatan ?></h4>
                        <label>Deskripsi:</label><br>
                        <h4><?= $data->description ?></h4>
                    </div>
                    <div class='col-md-6'>
                        <img src="{{ $data->image_url }}" alt="" class="img-fluid">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
