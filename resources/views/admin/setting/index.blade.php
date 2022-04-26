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
                    <h4 class="card-title">Edit Header</h4>
                    <a href="{{ route('admin.legalitas.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.setting.save',['id'=> $header->setting_id]) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <img src="{{ $header->image_url }}" style='width:15%'>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" class="file-upload-default" accept=".jpg,.png,.jpeg">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Logo">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        <label for="footer">Footer Logo</label>
                        <input type="file" name="footer" class="file-upload-default" accept=".jpg,.png,.jpeg">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload footer">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                    </div>
                    <h4> Button Navigasi</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Link Button</label>
                                <input type="url" name="link_nav" class="form-control" id="link_nav" placeholder="Masukkan URL" value="{{ $header->link_nav }}">
                            </div>
                        </div>
                    </div>
                    <h4>Kontak</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Nama Kontak 1</label>
                                <input type="text" name="kontak1_name" class="form-control" id="kontak1_name" placeholder="Masukan Nama" value="{{ $header->kontak1_name }}">
                            </div>
                            
                            <div class="col-6">
                                <label for="title">Nama Kontak 2</label>
                                <input type="text" name="kontak2_name" class="form-control" id="kontak2_name" placeholder="Masukan Nama" value="{{ $header->kontak2_name }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Nomor Kontak 1</label>
                                <input type="number" name="kontak1_phone" class="form-control" id="kontak1_phone" placeholder="Masukan Phone" value="{{ $header->kontak1_phone }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Nomor Kontak 2</label>
                                <input type="number" name="kontak2_phone" class="form-control" id="kontak2_phone" placeholder="Masukan Phone" value="{{ $header->kontak2_phone }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email" value="{{ $header->email }}">
                            </div>
                        </div>
                    </div>
                    <h4>Media Sosial</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Link Facebook</label>
                                <input type="url" name="link_fb" class="form-control" id="link_fb" placeholder="Masukan Nama" value="{{ $header->link_fb }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Link Twitter</label>
                                <input type="url" name="link_twitter" class="form-control" id="link_twitter" placeholder="Masukan Phone" value="{{ $header->link_twitter }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Link Instagram</label>
                                <input type="url" name="link_ig" class="form-control" id="link_ig" placeholder="Masukan Phone" value="{{ $header->link_ig }}">
                            </div>
                            <div class="col-6">
                                <label for="title">Link Youtube</label>
                                <input type="url" name="link_yt" class="form-control" id="link_yt" placeholder="Masukan Phone" value="{{ $header->link_yt }}">
                            </div>
                        </div>
                    </div>
                    <h4>Footer</h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Alamat</label>
                                <textarea name="address" id="address" class="summernote">{{ $header->address }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="title">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="summernote">{{ $header->keterangan }}</textarea>
                            </div>
                            <div class="col-6">
                                <label for="title">Bantuan</label>
                                <textarea name="bantuan" id="bantuan" class="summernote">{{ $header->bantuan }}</textarea>
                            </div>
                        </div>
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
