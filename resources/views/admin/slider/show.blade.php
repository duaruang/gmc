@extends('layout.admin')
@section('title')
Tampilan Slider
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Slider</h4>
                    <a href="{{ route('admin.slider.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <img src="{{ $slider->image_url }}" alt="" class="img-fluid">
                <h3 class="mb-4">{{ $slider->title }}</h3>
                <h5 class="mb-4">{{ $slider->subtitle }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection