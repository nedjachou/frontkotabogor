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
                    <li>Berita</li>
                </ul>
                <h2>Berita</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="blog-page">
        <div class="container">
            <?php if(isset($cari)): ?>
                <h1 class="py-3">Cari : <?php echo e($cari); ?></h1>
            <?php endif; ?>
            <?php if(isset($tag)): ?>
                <h1 class="py-3">Tag : <?php echo e($tag); ?></h1>
            <?php endif; ?>
            <div class="row">
                <!--Blog Page Single Start-->
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($item->file); ?>"
                                    alt="">
                                <a href="<?php echo e('/berita-detail/' . $item->id); ?>">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p><?php echo e(date('d', strtotime($item->tgl_publikasi))); ?> /
                                        <?php echo e(date('m', strtotime($item->tgl_publikasi))); ?> <br>
                                        <span><?php echo e(date('Y', strtotime($item->tgl_publikasi))); ?></span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a><i class="far fa-user-circle"></i> oleh Admin </a>
                                    </li>

                                </ul>
                                <h3 class="blog-one__title h-[100px]"><a
                                        href="<?php echo e('/berita-detail/' . $item->id); ?>"><?php echo e($item->judul); ?> </a></h3>
                                <div class="blog-one__btn-box">
                                    <a href="<?php echo e('/berita-detail/' . $item->id); ?>">Baca selengkapnya <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="blog-one__tag">
                                    <p> <?php echo e($item->user_id); ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!--Blog Page Single End-->
            </div>
            <div class="col-lg-12">
                <?php
                    $currentPage = $data->currentPage();
                    $lastPage = $data->lastPage();
                ?>

                <div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
                    
                    <?php if($data->onFirstPage()): ?>
                        <span class="page-numbers">‹</span>
                    <?php else: ?>
                        <a class="page-numbers" href="<?php echo e($data->previousPageUrl()); ?>">‹</a>
                    <?php endif; ?>

                    
                    <?php if($currentPage > 3): ?>
                        <a class="page-numbers" href="<?php echo e($data->url(1)); ?>">1</a>
                        <?php if($currentPage > 4): ?>
                            <span class="page-numbers">...</span>
                        <?php endif; ?>
                    <?php endif; ?>

                    
                    <?php for($i = max(1, $currentPage - 2); $i <= min($lastPage, $currentPage + 2); $i++): ?>
                        <?php if($i == $currentPage): ?>
                            <span class="page-numbers current"><?php echo e($i); ?></span>
                        <?php else: ?>
                            <a class="page-numbers" href="<?php echo e($data->url($i)); ?>"><?php echo e($i); ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    
                    <?php if($currentPage < $lastPage - 2): ?>
                        <?php if($currentPage < $lastPage - 3): ?>
                            <span class="page-numbers">...</span>
                        <?php endif; ?>
                        <a class="page-numbers" href="<?php echo e($data->url($lastPage)); ?>"><?php echo e($lastPage); ?></a>
                    <?php endif; ?>

                    
                    <?php if($data->hasMorePages()): ?>
                        <a class="next page-numbers" href="<?php echo e($data->nextPageUrl()); ?>">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    <?php else: ?>
                        <span class="page-numbers">›</span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/berita/berita.blade.php ENDPATH**/ ?>