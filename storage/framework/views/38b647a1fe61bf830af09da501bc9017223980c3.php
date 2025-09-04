<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(<?php echo e(config('app.eksternal_link')); ?>/storage/slider/<?php echo e($slide->file); ?>);">
                    </div>
                    <div class="main-slider-bubble">
                        <div class="main-slider-bubble-bg"
                            style="background-image: url(<?php echo e(asset('assets/images/shapes/main-slider-bubble-bg.png')); ?>);">
                        </div>
                    </div>
                    <div class="main-slider-star-1 zoominout">
                        <img src="<?php echo e(asset('assets/images/shapes/main-slider-star-1.png')); ?>" alt="">
                    </div>
                    <div class="main-slider-star-2 zoominout-2">
                        <img src="<?php echo e(asset('assets/images/shapes/main-slider-star-2.png')); ?>" alt="">
                    </div>
                    <div class="main-slider-star-3 zoominout">
                        <img src="<?php echo e(asset('assets/images/shapes/main-slider-star-3.png')); ?>" alt="">
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="fa fa-angle-right"></i>
            </div>
        </div>

    </div>
</section>
<?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/front/include/slide.blade.php ENDPATH**/ ?>