<?php $__env->startSection('title'); ?>
Profil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">Profil</h4>
                </div>
                <p class="card-description"></p>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-profil-tab" data-toggle="tab" href="#nav-profil" role="tab" aria-controls="nav-profil" aria-selected="true">Profil</a>
                        <a class="nav-item nav-link" id="nav-akun-tab" data-toggle="tab" href="#nav-akun" role="tab" aria-controls="nav-akun" aria-selected="false">Akun</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-profil-tab">
                        <form action="<?php echo e(route('member.profile.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="<?php echo e(auth()->user()->name); ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">No Hp</label>
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="No Hp" value="<?php echo e(auth()->user()->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label for="bank">Address</label>
                                <textarea name="address" placeholder="Alamat" cols="30" rows="10" class="form-control"><?php echo e(auth()->user()->address); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-akun" role="tabpanel" aria-labelledby="nav-akun-tab">
                        <form action="<?php echo e(route('member.profile.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('put'); ?>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="name" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="new_password">Password Baru</label>
                                <input type="password" name="new_password" class="form-control" id="name" placeholder="Password Baru">
                            </div>
                            <div class="form-group">
                                <label for="new_password_confirmed">Konfirmasi Password Baru</label>
                                <input type="password" name="new_password_confirmation" class="form-control" id="name" placeholder="Konfirmasi Password Baru">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.member', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/member/profile/index.blade.php ENDPATH**/ ?>