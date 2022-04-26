@extends('layout.admin')
@section('title')
Tampilan Video
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Video</h4>
                    <a href="{{ route('admin.video.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <iframe width="500" height="300" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3 class="mb-4">{{ $video->title }}</h3>
                <p>
                    {{ $video->description }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
