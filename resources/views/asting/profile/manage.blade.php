@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Manajemen</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Manajemen</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            @foreach($data as $data)
            <div class="col-xl-4 col-lg-4 col-md-6">
                <!--Meet Volunteers One Single-->
                <div class="meet-volunteers-one__single">
                    <div  data-toggle="modal" data-target="#exampleModal" class="meet-volunteers-one__content" onclick="view('{{$data->management_id}}')" style='cursor:pointer'>
                        <div class="meet-volunteers-one__img">
                            <img src="{{ $data->image_url }}" alt="">
                        </div>
                        <div class="meet-volunteers-one__name">
                            
                        </div>
                        <div class="meet-volunteers-one__social-info">
                            <div class="text-center">
                            <h5>{{ $data->name }}</h5>
                                <p>{{ $data->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div style='margin-top:100px' class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Board of Management</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id='isi'>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- Modal -->

<!--Become Volunteer End-->
@endsection
@push('script')
<script>
    function view(id){
        $.ajax({
            url: "/modal",
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#isi').html(data);
            }
        });
    }
</script>
@endpush