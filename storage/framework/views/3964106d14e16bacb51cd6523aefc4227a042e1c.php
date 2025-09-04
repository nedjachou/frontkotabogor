<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo e(asset('assets/images/backgrounds/halaman-header.png')); ?>)">
        </div>
        <div class="page-header-bubble"><img src="#" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Berita Detil</li>
                </ul>
                <h2>Berita Detil</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="blog-details">

        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">

                        <div class="blog-details__img">
                            <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($data->file); ?>" alt="">
                        </div>

                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li>
                                    <a href="<?php echo e('/berita-detail/' . $data->id); ?>"><i class="far fa-user-circle"></i> oleh
                                        Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-details__title">
                                <?php echo e($data->judul); ?>

                            </h3>
                            <p class="blog-details__text-1">
                                <?php echo $data->konten; ?>

                            </p>

                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Tags</span>
                                <?php $__currentLoopData = $data->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('berita.tag', $row->nama_tag)); ?>"><?php echo e($row->nama_tag); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="<?php echo e(route('berita.cari')); ?>" method="get" class="sidebar__search-form">
                                <input type="search" name="key" placeholder="Cari berita">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <h3 class="sidebar__title">Berita Terbaru</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <?php $__currentLoopData = $dataTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        
                                        <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($row->file); ?>"
                                            alt="" width="80px" class="img-thumbnail">
                                        
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="<?php echo e('/berita-detail/' . $row->id); ?>">
                                                    <?php echo e($row->judul); ?>

                                                </a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/berita/berita-detail.blade.php ENDPATH**/ ?>