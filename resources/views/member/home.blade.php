@extends('layout.member')

@section('title')
Beranda
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        Hello {{ auth()->user()->name }}
    </div>
</div>
@endsection