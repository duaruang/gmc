@extends('layout.admin')
@section('title')
Tambah Video
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Video</h4>
                    <a href="{{ route('admin.video.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.video.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Judul" value="{{ old('judul') }}">
                    </div>
                    <div class="form-group">
                        <label for="url">Url Video</label>
                        <input type="url" name="url" class="form-control" id="url" placeholder="Url Video" value="{{ old('url') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Konten</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
