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
            @foreach ($slider as $slide)
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{ config('app.eksternal_link') }}/storage/slider/{{ $slide->file }});">
                    </div>
                    <div class="main-slider-bubble">
                        <div class="main-slider-bubble-bg"
                            style="background-image: url({{ asset('assets/images/shapes/main-slider-bubble-bg.png') }});">
                        </div>
                    </div>
                    <div class="main-slider-star-1 zoominout">
                        <img src="{{ asset('assets/images/shapes/main-slider-star-1.png') }}" alt="">
                    </div>
                    <div class="main-slider-star-2 zoominout-2">
                        <img src="{{ asset('assets/images/shapes/main-slider-star-2.png') }}" alt="">
                    </div>
                    <div class="main-slider-star-3 zoominout">
                        <img src="{{ asset('assets/images/shapes/main-slider-star-3.png') }}" alt="">
                    </div>
                </div>
            @endforeach
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
