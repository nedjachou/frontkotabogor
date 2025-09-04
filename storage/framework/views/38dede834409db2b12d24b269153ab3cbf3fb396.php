<header class="main-header clearfix" id="beranda">
    <div class="main-header__top">
        <div class="main-header__top-social-box">
            <div class="container">
                <div class="main-header__top-social-box-inner">
                    <p class="main-header__top-social-text">Selamat Datang Bogorian!</p>
                    <div class="main-header__top-social">
                        <a href="https://twitter.com/pemkotabogor"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/PemerintahKotaBogor"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/c/PemerintahKotaBogor"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/pemkotbogor/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header__top-details">
            <div class="container">
                <div class="main-header__top-details-inner">
                    <div class="main-header__logo">
                        <a href="/"><img src="<?php echo e(asset('/assets/images/resources/logo-1.png')); ?>"
                                alt=""></a>
                    </div>
                    <ul class="list-unstyled main-header__top-details-list">
                        <li>
                        <div class="icon">
                            <span class="icon-location-1"></span>
                        </div>
                        <div class="text">
                            <h5>Balai Kota Bogor</h5>
                            <p>
                            Jl. Ir. H. Juanda No. 10 Bogor
                            </p>
                        </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="text">
                                <h5>Whatsapp Kota Bogor</h5>
                                <p class="information__number">
                                    <a href="https://api.whatsapp.com/send?phone=+6281122882233&text=Hallo">+62811-2288-2233</a>
                                </p>
                            </div>
                        </li>
                        <li>
                                                  
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>                            
                            <div class="text">
                                <h5>E-mail Pengaduan:</h5>
                                <p><a href="mailto:sibadra@kotabogor.go.id">sibadra@kotabogor.go.id</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-menu clearfix">

        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list one-page-scroll-menu">
                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($menu->judul == 'Berita'): ?>
                                        <li class="menu-item">
                                            <a href="<?php echo e(route('berita')); ?>"><?php echo e($menu->judul); ?> </a>
                                        </li>
                                    <?php elseif($menu->judul == 'faq'): ?>
                                        <li class="menu-item">
                                            <a href="#faq"><?php echo e($menu->judul); ?> </a>
                                        </li>
                                    <?php else: ?>
                                        <li class="menu-item-has-children">
                                            <a href="<?php echo e($menu->link); ?>"><?php echo e($menu->judul); ?> </a>
                                            <ul class="sub-menu" style="text-align: left !important;">
                                                <?php $__currentLoopData = $menu->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($chd->status == '1'): ?>
                                                        <?php if($chd->kategori == 'Link'): ?>
                                                            <li>
                                                                <a href="<?php echo e($chd->link); ?>"
                                                                    class="text-left" target="blank"><?php echo e($chd->judul); ?> </a>
                                                            </li>
                                                        <?php else: ?>
                                                            <li>
                                                                <a href="<?php echo e(route('halaman', ['slug' => ltrim($chd->link, '/')])); ?>"
                                                                    class="text-left"><?php echo e($chd->judul); ?></a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__search-box">
                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/includes/header.blade.php ENDPATH**/ ?>