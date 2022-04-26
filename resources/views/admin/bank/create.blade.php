@extends('layout.admin')
@section('title')
Tambah Bank
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Tambah Bank</h4>
                    <a href="{{ route('admin.bank.index') }}" class="btn btn-primary">
                        <i class="mdi mdi-arrow-left mdi-18px"></i>
                    </a>
                </div>
                <p class="card-description"></p>
                <form class="forms-sample" action="{{ route('admin.bank.store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="bank">Bank</label>
                        <input type="text" name="bank" class="form-control" id="bank" placeholder="Bank" value="{{ old('bank') }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Atas Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="number">No Rekening</label>
                        <input type="text" name="number" class="form-control" id="number" placeholder="No Rekening" value="{{ old('number') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection