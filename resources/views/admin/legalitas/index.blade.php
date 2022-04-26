@extends('layout.admin')
@section('title')
Edit Legalitas
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
                    <h4 class="card-title">Edit Legalitas</h4>
                    <a href="{{ route('admin.legalitas.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.legalitas.save',$data->legalitas_id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="name" class="form-control" id="title" placeholder="Masukan nama" value="{{ $data->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Konten</label>
                        <textarea name="description" id="description" class="summernote"><?= $data->description?></textarea>
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
