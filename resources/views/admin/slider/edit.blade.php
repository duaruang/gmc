@extends('layout.admin')
@section('title')
Edit Slider
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Slider</h4>
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.slider.update',$slider->slider_id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ $slider->title }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Sub Judul</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Judul" value="{{ $slider->subtitle }}">
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
                        <input class="form-check-input" type="checkbox" id="is_button" {{ $slider->is_button == 1 ? "checked" : "" }}>
                            <label class="form-check-label" style="margin-bottom:-1px;margin-left:5px;" for="is_button">Button Active</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="source_url">Button Link</label>
                        <input type="url" name="button_link" class="form-control" id="button_link" placeholder="https://example.com" value="{{ $slider->button_link }}">
                    </div>
                    <div class="form-group">
                        <label for="source_url">Button Name</label>
                        <input type="text" name="button_name" class="form-control" id="button_name" placeholder="Visit" value="{{ $slider->button_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
