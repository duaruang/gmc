<?php if($paginator->hasPages()): ?>

    <ul class="pagination mx-auto">

        <?php if($paginator->onFirstPage()): ?>
        <li class="page-item mx-2 disabled"><span>← Previous</span></li>
        <?php else: ?>
        <li class="page-item mx-2"><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">← Previous</a></li>
        <?php endif; ?>


        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if(is_string($element)): ?>
        <li class="page-item mx-2 disabled"><span><?php echo e($element); ?></span></li>
        <?php endif; ?>


        <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($page == $paginator->currentPage()): ?>
        <li class="page-item mx-2 active"><span><?php echo e($page); ?></span></li>
        <?php else: ?>
        <li class="page-item mx-2"><a href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php if($paginator->hasMorePages()): ?>
        <li class="page-item mx-2"><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">Next →</a></li>
        <?php else: ?>
        <li class="page-item mx-2 disabled"><span>Next →</span></li>
        <?php endif; ?>
    </ul>
    <?php endif; ?>
<?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/vendor/pagination/custom.blade.php ENDPATH**/ ?>