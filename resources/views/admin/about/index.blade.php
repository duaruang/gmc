@extends('layout.admin')
@section('title')
Edit Tentang Kami
@endsection
@section('vendor-css')
<link rel="stylesheet" href="{{ asset('skydash/vendors/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Tentang Kami</h4>
                    <a href="{{ route('admin.about.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.about.save',$data->about_id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Judul" value="{{ $data->title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Judul" value="{{ $data->subtitle }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Konten</label>
                        <textarea name="description" id="description" class="summernote"><?= $data->description?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Banner</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="title">Home Judul</label>
                        <input type="text" name="home_title" class="form-control" id="home_title" placeholder="Judul" value="{{ $data->home_title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Home Keterangan</label>
                        <input type="text" name="home_desc" class="form-control" id="home_desc" placeholder="Judul" value="{{ $data->home_desc }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Home Gambar Tentang Kami</label>
                        <input type="file" name="home_image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('vendor-js')
<script src="{{ asset('skydash/vendors/summernote/summernote-bs4.min.js') }}"></script>
@endsection

@push('script')
<script>
    $('.summernote').summernote();
</script>
@endpush
