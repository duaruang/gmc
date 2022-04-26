@extends('layout.member')
@section('title')
View Donasi
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">View Donasi</h4>
                </div>
                <p class="card-description"></p>
                <div class="table-responsive">
                    <form id="msform" action="/donatur/donasi/prove/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label>Bukti Pembayaran</label>
                            <input type='file' name='image' class='form-control' accept='.png,.jpg,.jpeg'><br>
                            <input type='hidden' value='{{$donasi->donasi_id}}' name='donasi_id'>
                        <button type='submit' class="btn btn-block btn-primary">
                            <i class="fa fa-save"></i> Kirim bukti pembayaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $('.datatables').DataTable();
</script>
@endpush