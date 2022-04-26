<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2><?php echo e($article->title); ?></h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><span>/</span></li>
                <li><?php echo e($article->title); ?></li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Details Start-->
<section class="news-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="news-details__left">
                    <div class="news-details__img">
                        <img src="<?php echo e($article->image_url); ?>" alt="">
                        <div class="news-details__date-box">
                            <p><?php echo e(date('d',strtotime($article->published_at))); ?> <br>
                                <?php echo e(date('M',strtotime($article->published_at))); ?></p>
                        </div>
                    </div>
                    <div class="news-details__content">
                        
                        <h3 class="news-details__title"><?php echo e($article->title); ?></h3>
                        <p class="news-details__text-one">
                            <?php echo $article->content; ?>

                        </p>
                    </div>
                    <div class="news-details__bottom">
                        
                        <div class="news-details__social-list">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                            <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Artikel Terbaru</h3>
                        <ul class="sidebar__post-list list-unstyled">
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="<?php echo e($new->image_url); ?>" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                        
                                        <a href="<?php echo e(route('article.show',$new->slug)); ?>"><?php echo e($new->title); ?></a>
                                    </h3>
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
<!--News Details End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/article/show.blade.php ENDPATH**/ ?>