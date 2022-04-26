<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.home')); ?>">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.article.index')); ?>">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Artikel</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.kategori.index')); ?>">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.program.index')); ?>">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Program</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.donator.index')); ?>">
                <i class="mdi mdi-account-multiple menu-icon"></i>
                <span class="menu-title">Donatur</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.donation.index')); ?>">
                <i class="mdi mdi-wallet-giftcard menu-icon"></i>
                <span class="menu-title">Donasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.bank.index')); ?>">
                <i class="mdi mdi-credit-card menu-icon"></i>
                <span class="menu-title">Bank</span>
            </a>
        </li>
    </ul>
</nav><?php /**PATH /home/u1548576/public_html/gmc/gmc/resources/views/layout/partial/sidebar.blade.php ENDPATH**/ ?>