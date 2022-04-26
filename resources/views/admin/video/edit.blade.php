@extends('layout.admin')
@section('title')
Edit Video
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Edit Video</h4>
                    <a href="{{ route('admin.video.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.video.update',$video->video_id) }}" method="POST" autocomplete="off">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Judul" value="{{ !empty(old('title')) ? old('title') : $video->title }}">
                    </div>
                    <div class="form-group">
                        <label for="url">Url Video</label>
                        <input type="url" name="url" class="form-control" id="url" placeholder="Url Video" value="{{ !empty(old('url')) ? old('url') : $video->url }}">
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $video->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
