<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo e(asset('')); ?>);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Donations</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><span>/</span></li>
                <li>Campaigns Details</li>
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
                            <img src="<?php echo e($program->image_url); ?>" alt="">
                            
                        </div>
                        <div class="campaign-details__progress">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="<?php echo e($program->percent); ?>%">
                                    <div class="count-text"><?php echo e(number_format($program->percent,2,',','.')); ?>%</div>
                                </div>
                            </div>
                            <div class="campaign-details__goals">
                                <p><span>Rp <?php echo e(number_format($program->total_donasi,0,',','.')); ?></span> Terkumpul</p>
                                <p><span>Rp <?php echo e(number_format($program->target_amount,0,',','.')); ?></span> Goal</p>
                            </div>

                            <hr>
                            <div class="donation-form">
                                <form action="<?php echo e(route('donasi.store')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="program_id" value="<?php echo e($program->program_id); ?>">
                                    <label>Pilih Rekening</label>
                                    <select name="bank" class='form-control'>
                                        <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($bank->bank_id); ?>"><?php echo e($bank->bank); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <h3><?php echo e($program->title); ?></h3>
                        <p class="campaign-details__text"><?php echo e($program->description); ?></p>
                    </div>
                    
                    <div class="campaign-details__share">
                        <div class="campaign-details__share__social-box">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="campaign-details__right-bar">
                    
                    <div class="campaign-details__donations">
                        <h3 class="campaign-details__donations-title">Recent Donations</h3>
                        <ul class="list-unstyled campaign-details__donations-list">
                            <?php $__currentLoopData = $program->donasi_approved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                
                                <div class="campaign-details__donations-content">
                                    <h4>Rp. <?php echo e(number_format($donation->amount)); ?></h4>
                                    <h5><?php echo e($donation->user->name); ?> <span>3 hours ago</span></h5>
                                    
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Campaign Details End-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script>
    var btn_next =  $('.btn-next');
    var btn_submit =  $('.btn-submit');

    $(document).ready(function() {
        btn_next.attr('disabled', true);
        btn_submit.attr('disabled', true);
        $('.personal-data').hide();

        $('.btn-amount > button').click(function() {
            btn_next.attr('disabled', false);
            $('#custom').val('');
        });

        $('#custom').on('keyup', function() {
            btn_next.attr('disabled', false);
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
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/program/show.blade.php ENDPATH**/ ?>