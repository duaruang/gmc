<?php $__env->startSection('content'); ?>
<!--Page Header Start-->
<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <h2>Artikel</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                <li><span>/</span></li>
                <li>Artikel</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--News Page Start-->
<section class="news-page">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <div class="news-one__img-box">
                            <img src="<?php echo e($article->image_url); ?>" alt="">
                            <a href="<?php echo e(route('article.show',$article->slug)); ?>"></a>
                        </div>
                        <div class="news-one__date-box">
                            <p><?php echo e(date('d',strtotime($article->published_at))); ?> <br>
                                <?php echo e(date('M',strtotime($article->published_at))); ?></p>
                        </div>
                    </div>
                    <div class="news-one__content">
                        
                        <div class="news-one__title">
                            <h3><a href="<?php echo e(route('article.show',$article->slug)); ?>"><?php echo e($article->title); ?></a></h3>
                        </div>
                        <a href="<?php echo e(route('article.show',$article->slug)); ?>" class="thm-btn news-one__btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <nav class="pagination col-12">
                <?php echo e($articles->links('vendor.pagination.custom')); ?>

            </nav>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.asting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/asting/article/index.blade.php ENDPATH**/ ?>