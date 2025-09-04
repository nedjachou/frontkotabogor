<?php $__env->startSection('content'); ?>
    <!--Main Slider End-->
    <?php echo $__env->make('front.include.slide', ['slider' => $slider], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Feature One Start-->

    <!--Feature One End-->
    
    <!--Welcome One Start-->
    <section class="welcome-one" id="visiMisi">
        <?php echo $__env->make('front.include.vismis', ['profil' => $profil], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!--Welcome One End-->

    <!--Services One Start-->
    <section class="services-one" id="services">
        <?php echo $__env->make('front.include.list', ['agenda' => $agenda], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>
    <!--Services One End-->

    <!--berita One Start-->
    <section class="blog-one" id="berita">
        <div class="blog-one-shape" style="background-image: url(assets/images/shapes/blog-one-shape.png);">
        </div>
        <div class="container">
            <div class="section-title text-left">
                <!-- <span class="section-title__tagline">Sekilas</span> -->
                <h2 class="section-title__title">BERITA KOTA BOGOR </h2>
            </div>
            <div class="owl-carousel owl-theme thm-owl__carousel blog-one__carousel"
                data-owl-options='{
            "loop": true,
            "autoplay": true,
            "margin": 30,
            "nav": true,
            "dots": false,
            "smartSpeed": 500,
            "autoplayTimeout": 10000,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                },
                "1200": {
                    "items": 3
                }
            }
        }'>
                <!--Blog One Single Start-->
                <?php $__currentLoopData = $berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($item->file); ?>" alt="">
                            <a href="<?php echo e('/berita-detail/' . $item->id); ?>">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p><?php echo e(date('d', strtotime($item->tgl_publikasi))); ?> <br>    <?php echo e(date('M', strtotime($item->tgl_publikasi))); ?> <br>
                                    <span><?php echo e(date('Y', strtotime($item->tgl_publikasi))); ?></span>
                                </p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e('/berita-detail/' . $item->id); ?>"><?php echo e($item->judul); ?> </a></h3>
                            <div class="blog-one__btn-box">
                                <a href="<?php echo e('/berita-detail/' . $item->id); ?>">Baca selengkapnya <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p><?php echo e($item->user_id); ?> </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <a href="<?php echo e(route('berita')); ?>" class="thm-btn we-cleaning__btn" style="margin-top: 50px;">Lihat Semua Berita<i
                    class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
    <!--berita One End-->

    <!--kualitas udara Page Start-->
    <section class="gallery-page gallery-carousel-page" id="galeri">
        <div class="container">
            <div class="section-title text-center" >
                <span class="section-title__tagline"></span>
                <h2 class="section-title__title">Informasi di Kota Bogor</h2>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="blog-sideabr__left">
                    <div class="blog-sidebar__content">
                        <!--Blog Sidebar Single-->
                        <div class="blog-sidebar__single">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="blog-sidebar__img">
                                        <iframe src="https://ispu.menlhk.go.id/internal/web/site/stasiun/bogor"
                                            width="100%" height="700px"></iframe>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <script type="text/javascript" src="https://widget.komdigi.go.id/gpr-widget-kominfo.min.js"></script>
                                    <div class="panel widget">
                                        <div id="gpr-kominfo-widget-container" ></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--kualitas udara Page End-->

    <!--banner Start-->
    <section class="team-one" id="team">
        <div class="section-title text-center" style="margin-top: -90px;">
            <span class="section-title__tagline"></span>
            <h2 class="section-title__title">Banner Informasi</h2>
        </div>
        <div class="swiper-container" id="banner-slider">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $banner->chunk(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Bagi menjadi grup 10 item per slide -->
                    <div class="swiper-slide">
                        <div class="grid-container">
                            <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="grid-item">
                                    <?php if(!empty($item->link)): ?>
                                        <a href="<?php echo e($item->link); ?>" target="_blank" rel="noopener noreferrer">
                                            <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($item->image); ?>"
                                                alt="">
                                        </a>
                                    <?php else: ?>
                                        <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/data/<?php echo e($item->image); ?>"
                                            alt="">
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <!--banner End-->

    <!--FAQ One Start-->
    
    <!--FAQ One End-->

    <!--Google Map Start-->
    <section class="google-map" id="kontak">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.41506092074!2d106.79111627462329!3d-6.595225264470599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d2e12d0d%3A0x393a0a0f7de45736!2sKantor%20Walikota%20Bogor!5e0!3m2!1sid!2sid!4v1694348142921!5m2!1sid!2sid"
            class="google-map__one" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            /* 5 kolom default */
            grid-template-rows: repeat(2, auto);
            /* 2 baris default */
            gap: 15px;
            /* Jarak antar item */
            justify-content: center;
            padding: 20px;
            /* Padding di sekitar grid */
        }

        .grid-item {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            /* Padding luar untuk jarak antar grid */
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 100%;
        }

        .grid-item a {
            display: flex;
            width: 100%;
            height: 100%;
            padding: 5px;
            /* Padding dalam untuk jarak gambar */
        }

        .grid-item img {
            width: 100%;
            /* Mengisi grid sepenuhnya */
            height: 100%;
            /* Mengisi tinggi grid */
            object-fit: contain;
            /* Gambar tetap proporsional tanpa terpotong */
            border-radius: 5px;
            /* Opsional: sudut gambar lebih halus */
            background: #f8f8f8;
            /* Opsional: warna latar belakang jika gambar tidak penuh */
        }


        /* Responsiveness */
        @media (max-width: 1024px) {
            .grid-container {
                grid-template-columns: repeat(4, 1fr);
                /* 4 kolom di tablet */
                grid-template-rows: repeat(3, auto);
                /* 3 baris agar tetap enak dilihat */
            }
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
                /* 3 kolom di layar kecil */
                grid-template-rows: repeat(4, auto);
                /* 4 baris */
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: repeat(2, 1fr);
                /* 2 kolom di layar HP */
                grid-template-rows: repeat(5, auto);
                /* 5 baris agar tetap maksimal */
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script>
        var swiper = new Swiper("#banner-slider", {
            slidesPerView: 1, // 1 grup per slide
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.home-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/home.blade.php ENDPATH**/ ?>