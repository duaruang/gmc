@extends('layout.admin')
@section('title')
Tampilan Program
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Program</h4>
                    <a href="{{ route('admin.program.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <img width="300" src="{{ $program->image_url }}" alt="" class="img-fluid mb-4">
                <h3 class="mb-1">title : {{ $program->title }}</h3>
                <h4 class="mb-4 text-muted">Subtitle : {{ $program->subtitle }}</h4>
                {!! $program->description !!}
                <h3 class="my-4">Galeri</h3>
                <div class="row">
                    @foreach($program->galeries as $galery)
                    <div class="col-md-4 mb-2">
                        <img src="{{ $galery->image_url }}" class="img-fluid">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
