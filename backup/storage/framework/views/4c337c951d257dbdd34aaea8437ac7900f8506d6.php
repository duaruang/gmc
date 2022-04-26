<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Become a Volunteer</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>Become a Volunteer</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Become Volunteer Start-->
<section class="become-volunteer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__left">
                    <div class="become-volunteer__img">
                        <img src="assets/images/resources/become-volunteer-img1.jpg" alt="">
                    </div>
                    <div class="become-volunteer__requirements">
                        <h3>Requirements</h3>
                        <p class="become-volunteer__text">Aliquam hendrerit a augue insu image pellentes que id erat quis sollicitud null mattis Ipsum is simply dummy typesetting industry. Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in meifn pericula euripidis.</p>
                        <ul class="list-unstyled become-volunteer__requirements-list">
                            <li>
                                <div class="become-volunteer__requirements-icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="become-volunteer__requirements-text">
                                    <p>Nsectetur cing do not elit.</p>
                                </div>

                            </li>
                            <li>
                                <div class="become-volunteer__requirements-icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="become-volunteer__requirements-text">
                                    <p>Suspe ndisse suscipit sagittis in leo.</p>
                                </div>

                            </li>
                            <li>
                                <div class="become-volunteer__requirements-icon">
                                    <span class="icon-confirmation"></span>
                                </div>
                                <div class="become-volunteer__requirements-text">
                                    <p>Entum estibulum dignissim lipsm posuere.</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                    <div class="become-volunteer__mail-box">
                        <p>Kirim email</p>
                        <a href="mailto:cs@globalmoeslimcharity.com">cs@globalmoeslimcharity.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="become-volunteer__right">
                    <form class="become-volunteer__form form" action="<?php echo e(route('relawan.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Nama" name="name">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="email" placeholder="Email" name="email">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="No Whatsapp" name="whatsapp">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Alamat" name="address">
                        </div>
                        <div class="become-volunteer__input">
                            <input type="text" placeholder="Tanggal Lahir (Y-m-d)" name="birth_date">
                        </div>
                        <div class="become-volunteer__input">
                            <textarea name="about" placeholder="Tentang Pekerjaan Anda"></textarea>
                        </div>
                        <button type="submit" class="thm-btn become-volunteer__form-btn">Kirim Pengajuan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Become Volunteer End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/relawan.blade.php ENDPATH**/ ?>