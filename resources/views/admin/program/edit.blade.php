@extends('layout.admin')
@section('title')
Ubah Program
@endsection

@section('vendor-css')
<link rel="stylesheet" href="{{ asset('skydash/vendors/summernote/summernote-bs4.min.css') }}">
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/vendor/image-uploader/image-uploader.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Ubah Program</h4>
                    <a href="{{ route('admin.program.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.program.update',$program->program_id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Judul" value="{{ $program->title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Judul" value="{{ $program->subtitle }}">
                    </div>
                    <div class="form-group">
                        <label for="image_icon">Gambar Icon</label>
                        <input type="file" name="image_icon" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar Thumb</label>
                        <input type="file" name="imageThumb" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
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
                        <label for="description">Deskripsi</label>
                        <textarea name="description" class="form-control summernote">{{ $program->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="galery">Galeri</label>
                        <div class="input-images"></div>
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
<script type="text/javascript" src="{{ asset('assets/vendor/image-uploader/image-uploader.min.js') }}"></script>
@endsection

@push('script')
<script>
    $('.summernote').summernote();
    $.ajax({
        method : "GET",
        url : "{{ route('admin.program.getGaleries',$program->program_id) }}",
        dataType : "json",
        success : function(response){
            console.log(response);
            $('.input-images').imageUploader({
                preloaded : response,
                preloadedInputName : 'old'
            });
        }
    });
</script>
@endpush