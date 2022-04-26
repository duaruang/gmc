@extends('layout.admin')
@section('title')
Tambah Slider
@endsection


@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Slider</h4>
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.slider.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Judul" value="{{ old('subtitle') }}">
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="is_button" id="is_button" value="1">
                            <label class="form-check-label" style="margin-bottom:-1px;margin-left:5px;" for="is_button">Button Active</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="source_url">Button Link</label>
                        <input type="url" name="button_link" class="form-control" id="button_link" placeholder="Link Sumber" value="{{ old('button_link') }}">
                    </div>
                    <div class="form-group">
                        <label for="text">Button Name</label>
                        <input type="text" name="button_name" class="form-control" id="button_name" placeholder="Link Sumber" value="{{ old('button_name') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
