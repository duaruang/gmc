@extends('layout.asting')

@section('content')
<!--Page Header Start-->
<section class="page-header" style="background-image: url({{ asset('') }});">
    <div class="container">
        <div class="page-header__inner">
            <h2>Detail Program</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>/</span></li>
                <li>Detail Program</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Campaign Details Start-->
<section class="campaign-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="campaign-details__left-bar">
                    <div class="campaign-details__img">
                        <div class="campaign-details__img-box">
                            <img src="{{ $program->image_url }}" alt="">
                            {{-- <div class="campaign-details__category">
                                <p>Food</p>
                            </div> --}}
                        </div>
                        <div class="campaign-details__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="{{ $program->percent }}%">
                                    <div class="count-text">{{ number_format($program->percent,2,',','.') }}%</div>
                                </div>
                            </div>
                            <div class="campaign-details__goals">
                                <p><span>Rp {{ number_format($program->total_donasi,0,',','.') }}</span> Terkumpul</p>
                                <p><span>Rp {{ number_format($program->target_amount,0,',','.') }}</span> Goal</p>
                            </div>

                            <hr>
                            <div class="donation-form">
                                <form action="{{ route('donasi.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="program_id" value="{{ $program->program_id }}">
                                    <label>Pilih Rekening</label>
                                    <select name="bank" class='form-control'>
                                        @foreach ($banks as $bank)
                                        <option value="{{ $bank->bank_id }}">{{ $bank->bank }}</option>
                                        @endforeach
                                    </select>
                                    <label>Pilih Jumlah</label>
                                    <div class="row btn-amount btn-group-toggle" data-toggle="buttons">
                                        <button class="col-5 mb-2 mx-auto btn btn-outline-success">
                                            <input type="radio" name="amount" value="250000" autocomplete="off"> Rp. 250.000
                                        </button>
                                        <button class="col-5 mb-2 mx-auto btn btn-outline-success">
                                            <input type="radio" name="amount" value="500000" autocomplete="off"> Rp. 500.000
                                        </button>
                                        <button class="col-5 mb-2 mx-auto btn btn-outline-success">
                                            <input type="radio" name="amount" value="1000000" autocomplete="off"> Rp. 1.000.000
                                        </button>
                                        <button class="col-5 mb-2 mx-auto btn btn-outline-success">
                                            <input type="radio" name="amount" value="2500000" autocomplete="off"> Rp. 2.500.000
                                        </button>
                                    </div>
                                    <label>Jumlah Lain</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        <input type="number" name="custom" class="form-control" id="custom">
                                    </div>
                                    <div class="campaign-details__share__btn-box">
                                        <button type="button" class="thm-btn campaign-details__share__btn btn-next">Donate Now</button>
                                    </div>
                                    <div class="personal-data">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" name="name" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="">No HP</label>
                                                    <input type="text" name="phone" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" class="form-control donatur" id="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="campaign-details__share__btn-box">
                                            <button type="submit" class="thm-btn campaign-details__share__btn btn-submit">Donate Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="campaign-details__text-box">
                        <h3>{{ $program->title }}</h3>
                        <p class="campaign-details__text">{{ $program->description }}</p>
                    </div>
                    @if(empty($program->galeries))
                    <div class="campaign-details__summary">
                        <h3 class="campaign-details__summary-title">Galeri</h3>
                        <div class="campaign-details__summary-img-box">
                            <div class="row">
                                @foreach($program->galeries as $galery)
                                <div class="col-xl-6 col-lg-6 mb-2">
                                    <div class="campaign-details__summary-img-box-single img-fluid">
                                        <img src="{{ $galery->image_url }}" alt="">
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    {{--<div class="campaign-details__map">
                        <h3 class="campaign-details__map-title">Campaign Map</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="campaign-details__map-box" allowfullscreen></iframe>
                    </div> --}}
                    <div class="campaign-details__share">
                        <div class="campaign-details__share__social-box">
                            <a target="_blank" href="http://twitter.com/share?text={{ $program->title }}&url={{ route('program.show',$program->slug) }}&hashtags=gmc,globalmoeslimcharity"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?quote={{ $program->title }}&u={{ route('program.show',$program->slug) }}" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="https://wa.me/send?text={{ $program->title }} %0alink : {{ route('program.show',$program->slug) }}" data-action="share/whatsapp/share" class="bg-success"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    {{-- <div class="campaign-details__download">
                        <div class="campaign-details__download__left-content">
                            <div class="icon">
                                <i class="far fa-file-pdf"></i>
                            </div>
                            <div class="text">
                                <h3>Our Presentation</h3>
                            </div>
                        </div>
                        <div class="campaign-details__download__right-content">
                            <a href="#" class="thm-btn campaign-details__download-btn">Download</a>
                        </div>
                    </div>
                    --}}
                    <div class="comment-one">
                        <h3 class="comment-one__title">{{ $program->comments()->count() }} Komentar</h3>
                        @foreach($program->comments as $comment)
                        <div class="comment-one__single">
                            <div class="comment-one__content">
                                <h3>{{ $comment->name }}</h3>
                                <p>
                                    {{ !empty($comment->subject) ? '@'.$comment->subject : '' }} {{ $comment->message }}
                                </p>
                                <!--<button data-name="{{ $comment->name }}" class="thm-btn replyBtn comment-one__btn float-right">Balas</button>-->
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h3 class="comment-form__title">Tinggalkan Komentar</h3>
                        <form action="{{ route('program.comment',$program->slug) }}" method="POST" class="comment-one__form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Nama" name="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" min="11" placeholder="No HP" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" placeholder="Tulis pesan" required></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Kirim Komentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="campaign-details__right-bar">
                    {{-- <div class="campaign-details__organizer">
                        <div class="campaign-details__organizer-img">
                            <img src="assets/images/resources/organizer-img-1.png" alt="">
                        </div>
                        <h3 class="campaign-details__organizer-title">Jessica Smith</h3>
                        <p class="campaign-details__organizer-text">It uses a dictionary of over lorem ipsum simply free text latin words,</p>
                    </div> --}}
                    <div class="campaign-details__donations">
                        <h3 class="campaign-details__donations-title">Recent Donations</h3>
                        <ul class="list-unstyled campaign-details__donations-list">
                            @foreach ($program->donasi_approved as $donation)
                            <li>
                                {{-- <div class="campaign-details__donations-img">
                                    <img src="assets/images/resources/recent-donation-img-1.jpg" alt="">
                                </div> --}}
                                <div class="campaign-details__donations-content">
                                    <h4>Rp. {{ number_format($donation->amount) }}</h4>
                                    <h5>{{ $donation->user->name }} <span>3 hours ago</span></h5>
                                    {{-- <p>God bless you dear</p> --}}
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Campaign Details End-->
@endsection

@push('script')
<script>
    var btn_next =  $('.btn-next');
    var btn_submit =  $('.btn-submit');

    $(document).ready(function() {
        btn_next.attr('disabled', true);
        btn_submit.attr('disabled', true);
        $('.personal-data').hide();

        $('.btn-amount > button').click(function() {
            if($('[name="bank"]').val() != null){
                btn_next.attr('disabled', false);
            }
            $('#custom').val('');
        });

        $('#custom').on('keyup', function() {
            if($('[name="bank"]').val() != null){
                btn_next.attr('disabled', false);
            }
            $('.btn-amount > button').removeClass('active');
            $('[name="amount"]:checked').prop('checked', false);
        });

        btn_next.click(function(){
            $(this).fadeOut();
            $('.personal-data').fadeIn();
        });

        $('.donatur').on('keyup',function(){
            check();
        });
    });

    function check(){
        var name = $('[name="name"]').val();
        var phone = $('[name="phone"]').val();
        var email = $('[name="email"]').val();
        if(name == '' || phone == '' || email == ''){
            btn_submit.attr('disabled', true);
        }else{
            btn_submit.attr('disabled', false);
        }
    }
    $(".replyBtn").click(function() {
        $('[name="subject"]').val($(this).attr('data-name'));
        $('html,body').animate({
            scrollTop: $(".comment-form").offset().top
        }, 'slow');
    });
</script>
@endpush
