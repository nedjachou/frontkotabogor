<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="welcome-one__left">
                <div class="welcome-one__bg"
                    style="background-image: url(/assets/images/backgrounds/welcome-one-bg.png);  height: 500px;"  >
                </div>
                <div class="welcome-one__main-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="welcome-one__circle-one" ></div>
                    <div class="welcome-one__img-1">
                        <img src="<?php echo e(asset('assets/images/resources/rubo.gif')); ?>" alt="" >
                        <div class="welcome-one__small-img-1 float-bob-x">
                            <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/foto/<?php echo e($profil->foto_wakil_walikota); ?>"
                                alt="" width="167" height="167">
                        </div>
                        <div class="welcome-one__small-img-2 float-bob-y">
                            <img src="<?php echo e(config('app.eksternal_link')); ?>/storage/foto/<?php echo e($profil->foto_walikota); ?>"
                                alt="<?php echo e($profil->foto_walikota); ?>" width="167" height="167">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="welcome-one__right">
                <div class="section-title text-left">

                    <h2 class="section-title__title">“<?php echo e($profil->judul); ?>”</h2>
                </div>
                <p class="welcome-one__text-1">
                    <?php echo $profil->keterangan; ?>

                </p>
                
                
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/front/include/vismis.blade.php ENDPATH**/ ?>