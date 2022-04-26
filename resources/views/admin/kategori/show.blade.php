@extends('layout.admin')
@section('title')
Tampilan Kategori
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tampilan Kategori</h4>
                    <a href="{{ route('admin.kategori.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <img src="{{ $kategori->image_url }}" alt="" class="img-fluid">
                <h3 class="mb-4">{{ $kategori->title }}</h3>
                {!! $kategori->keterangan !!}
            </div>
        </div>
    </div>
</div>
@endsection