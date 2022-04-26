<div class="row">
    <div class="col-sm-6">
        <img style='width:100%' src="{{ $data->image_url }}" alt="">
    </div>
    <div class="col-sm-6">
        <h5>{{ $data->name }}</h5>
        <p>{{ $data->jabatan }}</p>
        <p><?= $data->description ?></p>
    </div>
</div>