@extends('layout.admin')
@section('title')
lain Lain
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
                    <h4 class="card-title">Lain Lain</h4>
                    <a href="{{ route('admin.lain.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.lain.save',$data->lain_id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <h4> Copywrite Home</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Caption Atas</label>
                                <input type="text" name="caption1" class="form-control" id="caption1" placeholder="Masukan Caption" value="{{ $data->caption1 }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Caption Utama</label>
                                <input type="text" name="big_caption1" class="form-control" id="big_caption1" placeholder="Masukan Caption" value="{{ $data->big_caption1 }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">
                                <label for="title">Caption Bawah</label>
                                <input type="text" name="caption2" class="form-control" id="caption2" placeholder="Masukan Caption" value="{{ $data->caption2 }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Caption Utama Bawah</label>
                                <input type="text" name="big_caption2" class="form-control" id="big_caption2" placeholder="Masukan Caption" value="{{ $data->big_caption2 }}">
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-5"> Post Dig</h4>
                    <div class="form-group">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="postdig_active" id="postdig_active" {{ $data->postdig_active == 1 ? "checked" : "" }}>
                            <label class="form-check-label" style="margin-bottom:-1px;margin-left:5px;" for="postdig_active">Button Active</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Button Name</label>
                                <input type="text" name="postdig_button_name" class="form-control" id="postdig_button_name" placeholder="https://www.example.com" value="{{ $data->postdig_button_name }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Link Button</label>
                                <input type="url" name="postdig_button_link" class="form-control" id="postdig_button_link" placeholder="https://www.example.com" value="{{ $data->postdig_button_link }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title">Postdig Text</label>
                        <input type="text" name="postdig_text" class="form-control" id="postdig_text" placeholder="Masukan Copywrite" value="{{ $data->postdig_text }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="postdig_image" class="file-upload-default" accept=".jpg,.png,.jpeg">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <h4 class="mt-5"> Banner Kecil Bawah</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Link Button</label>
                                <input type="url" name="link_button" class="form-control" id="link_button" placeholder="https://www.example.com" value="{{ $data->link_button }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Caption Banner</label>
                                <input type="text" name="caption_banner" class="form-control" id="caption_banner" placeholder="Masukan Caption" value="{{ $data->caption_banner }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Banner</label>
                        <input type="file" name="image" class="file-upload-default" accept=".jpg,.png,.jpeg">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <h4 class="mt-5"> Artikel</h4>
                    <div class="form-group">
                        <label for="title">Keterangan Artikel</label>
                        <input type="text" name="article_desc" class="form-control" id="article_desc" placeholder="Masukan Keterangan Artikel" value="{{ $data->article_desc }}">
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
