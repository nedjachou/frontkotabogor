<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title> Pemerintah Kota Bogor </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Pemerintah Kota Bogor" />

    <!-- fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/brote-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('/assets/css/brote.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/brote-responsive.css') }}" />
<!-- 
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script> -->

</head>



<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <div class="toggle toggle--daynight">
            <input type="checkbox" id="toggle--daynight" class="toggle--checkbox">
            <label class="toggle--btn" for="toggle--daynight"><span class="toggle--feature"></span></label>

            @include('includes.header')

            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->

            <!--Main Slider Start-->
            <!-- <section class="main-slider clearfix" id="home">
            <div class="swiper-slide">
                <img src="assets/images/backgrounds/header3.jpg" width="100%" height="auto">
            </div>
        </section> -->

            <!--Main Slider End-->
            @include('front.include.slide')
            <!--Feature One Start-->

            <!--Feature One End-->
            {{-- @include('front.include.unggulan') --}}
            <!--Welcome One Start-->
            <section class="welcome-one" id="visiMisi">
                @include('front.include.vismis')
            </section>
            <!--Welcome One End-->

            <!--Services One Start-->
            <section class="services-one" id="services">
                @include('front.include.list')
            </section>
            <!--Services One End-->

            <!--Blog Sidebar Start-->


            <!--Portfolio Page Start-->
            <section class="portfolio-carousel-page" id="pengumuman">
                <div class="testimonial-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                    style="background-image: url(assets/images/shapes/testimonial-shape.png);">
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <!--<span class="section-title__tagline">Pengumuman</span>-->
                        <h2 class="section-title__title">Pengumuman dan Informasi</h2>
                    </div>
                    <div class="thm-owl__carousel owl-theme owl-carousel portfolio-carousel-page__carousel"
                        data-owl-options='{
					"items": 3,
					"margin": 30,
					"smartSpeed": 700,
					"loop":true,
					"autoplay": 6000,
					"nav":false,
					"dots":true,
					"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
					"responsive":{
						"0":{
							"items":1
						},
						"575":{
							"items":2
						},
						"992":{
							"items": 3
						}
					}
				}'>

                        @foreach ($data3 as $k => $item1)
                            <div class="item">
                                <!--Project Two Single Start-->
                                <div class="project-one__single">
                                    <div class="project-one__img">

                                        <img src="assets/images/project/{{ $item1->image }}" alt="">
                                        <div class="project-one__content">
                                            <h4 class="project-one__title"><a href="portfolio-details.html">Nama
                                                    Pengumuman 1</a>
                                            </h4>
                                            <p class="project-one__sub-title">Kategori Pengumuman 1</p>
                                        </div>
                                        <div class="project-one__arrow">
                                            <a class="img-popup"
                                                href="assets/images/project/{{ $item1->image }}"><i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Project Two Single End-->
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!--Portfolio Page End-->

            <!--Blog One Start-->
            <section class="blog-one" id="berita">
                <div class="blog-one-shape" style="background-image: url(assets/images/shapes/blog-one-shape.png);">
                </div>
                <div class="container">
                    <div class="section-title text-left">
                        <!--<span class="section-title__tagline">Berita</span>-->
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
                        @foreach ($data as $k => $item)
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img src="{{ asset('/assets/berita/' . $item->file) }}" alt="">
                                    <a href="berita-detil.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                    <div class="blog-one__date">
                                        <p>{{ date('d', strtotime($item->tgl_publikasi)) }} <br>
                                            <span>{{ date('Y', strtotime($item->tgl_publikasi)) }}</span></p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i> by Admin Diskominfo
                                            </a>
                                        </li>

                                    </ul>
                                    <h3 class="blog-one__title"><a href="#">{{ $item->judul }} </a></h3>
                                    <div class="blog-one__btn-box">
                                        <a href="#">Baca selengkapnya <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="blog-one__tag">
                                        <p>{{ $item->user_id }} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <a href="/berita" class="thm-btn we-cleaning__btn" style="margin-top: 50px;">Lihat Semua Berita<i
                            class="fa fa-angle-right"></i></a>
                </div>
            </section>
            <!--Blog One End-->

            <!--Gallery Page Start-->
            <section class="gallery-page gallery-carousel-page" id="galeri">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline"></span>
                        <h2 class="section-title__title">Update Perubahan Kualitas Udara di Kota Bogor</h2>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="blog-sideabr__left">
                            <div class="blog-sidebar__content">
                                <!--Blog Sidebar Single-->
                                <div class="blog-sidebar__content-box">

                                    <!-- <p class="blog-sidebar__text">There are many variations of passages of Lorem
                                        Ipsum available, but majority have suffered alteration in some form, by
                                        injected humour, or randomised words which don't look even slightly
                                        believable. If you are going to use a passage of Lorem Ipsum.</p>-->
                                </div>
                                <div class="blog-sidebar__single">
                                    <div class="blog-sidebar__img">
                                        <iframe src="https://ispu.menlhk.go.id/internal/web/site/stasiun/bogor"
                                            width="100%" height="1000px"></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </section>
            <!--Gallery Page End-->

            <!--Counter One Start-->
            <section class="counter-one">
                <div class="container">
                    <div class="counter-one__inner wow fadeInUp" data-wow-delay="100ms">
                        <div class="counter-one-bg-1"
                            style="background-image: url(assets/images/backgrounds/counter-one-bg-1.png);"></div>
                        <div class="counter-one-bg-2"
                            style="background-image: url(assets/images/backgrounds/counter-one-bg-2.png);"></div>
                        <ul class="list-unstyled counter-one__list">
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="36">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                    <p class="counter-one__text">OPD</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="68">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                    <p class="counter-one__text">Kelurahan</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="25">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                    <p class="counter-one__text">Puskesmas</p>
                                </div>
                            </li>
                            <li>
                                <div class="counter-one__icon">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="counter-one__count-box">
                                    <div class="counter-one__count-box-inner">
                                        <h3 class="odometer" data-count="4">00</h3>
                                        <span class="counter-one__plus">+</span>
                                    </div>
                                    <p class="counter-one__text">BUMD</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </section>
            <!--Counter One End-->

            <!--Team One Start-->
            <section class="team-one" id="team">
                <div class="team-one__bubbles wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                </div>
                <div class="team-one__shape-bg"
                    style="background-image: url(assets/images/shapes/team-one-shape-bg.png);">
                </div>
                <div class="team-one-start-1 zoominout"><img src="assets/images/shapes/team-one-star-1.png"
                        alt=""></div>
                <div class="team-one-start-2 zoominout-2"><img src="assets/images/shapes/team-one-star-2.png"
                        alt=""></div>
                <div class="team-one-start-3 zoominout"><img src="assets/images/shapes/team-one-star-3.png"
                        alt=""></div>
                <div class="team-one-start-4 zoominout-2"><img src="assets/images/shapes/team-one-star-4.png"
                        alt=""></div>
                <div class="team-one-start-5 zoominout"><img src="assets/images/shapes/team-one-star-5.png"
                        alt=""></div>
                <div class="container">
                    <div class="brand-one__inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="brand-one__main-content">
                                    <div class="thm-swiper__slider swiper-container"
                                        data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                           "0": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "375": {
                               "spaceBetween": 30,
                               "slidesPerView": 2
                           },
                           "575": {
                               "spaceBetween": 30,
                               "slidesPerView": 3
                           },
                           "767": {
                               "spaceBetween": 50,
                               "slidesPerView": 4
                           },
                           "991": {
                               "spaceBetween": 50,
                               "slidesPerView": 5
                           },
                           "1199": {
                               "spaceBetween": 100,
                               "slidesPerView": 5
                           }
                       }}'>
                                        <div class="swiper-wrapper">
                                            @foreach ($data4 as $k => $item4)
                                                <div class="swiper-slide" style="margin-left:20px;">
                                                    <img src="{{ asset('assets/images/brand/' . $item4->image) }}"
                                                        alt="">
                                                </div><!-- /.swiper-slide -->
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Team One End-->

            <!--FAQ One Start-->
            <section class="faq-one faq-two" id="faq">
                <div class="faq-one-bg" style="background-image: url(assets/images/backgrounds/bg-faq.jpg);"></div>
                <div class="faq-one-shape-1 float-bob-x"
                    style="background-image: url(assets/images/shapes/faq-one-shape-1.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9">
                            <div class="faq-one__left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline">FAQ</span>
                                    <h2 class="section-title__title">Frequently Asked Question yang Sering Muncul</h2>
                                </div>
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Apa nama website resmi Kota Bogor?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>https://kotabogor.go.id/</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Bagaimana cara melaporkan permasalahan pembangunan dan <br>pelayanan
                                                publik lingkungan Kota Bogor?</h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Anda bisa mengunjungi Website <a
                                                        href="https://sibadra.kotabogor.go.id">https://sibadra.kotabogor.go.id</a>
                                                    untuk mengadukan aspirasi anda ke Pemerintah Kota Bogor. Anda dapat
                                                    mengunduh di Playstore ataupun Appstore.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion last-chiled">
                                        <div class="accrodion-title">
                                            <h4>Bagaimana cara melihat informasi tentang wisata yang ada di Kota Bogor?
                                            </h4>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p>Anda dapat mengunjungi website <a
                                                        href="https://sibadra.kotabogor.go.id">https://sibadra.kotabogor.go.id</a>,
                                                    atau kunjungi website Kota Bogor lalu klik menu Pariwisata.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--FAQ One End-->

            <!--Google Map Start-->
            <section class="google-map" id="kontak">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.41506092074!2d106.79111627462329!3d-6.595225264470599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d2e12d0d%3A0x393a0a0f7de45736!2sKantor%20Walikota%20Bogor!5e0!3m2!1sid!2sid!4v1694348142921!5m2!1sid!2sid"
                    class="google-map__one" allowfullscreen></iframe>

            </section>
            <!--Google Map End-->

            <!--Information Start-->
            <section>
                @include('foter');
            </section>
            <!--Site Footer End-->

        </div>
    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png"
                        width="89" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:kominfo@kotabogor.go.id">kominfo@kotabogor.go.id</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">+62251- 8321075</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div
            style="
            position: absolute; 
            top:185px; 
            color: #fff; 
            font-weight: bolder; 
            pointer-events:none;">
            Tutup
        </div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">Cari disini</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Cari disini..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>


</body>

<a href="#" data-target="html" class="scroll-to-top" style="outline: #fff solid 2px;"><i
        class="fa fa-angle-up"></i></a>

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<script src="{{ asset('/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/odometer/odometer.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('/assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/vegas/vegas.min.js') }}"></script>
<script src="{{ asset('/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('/assets/vendors/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('/assets/vendors/circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>
<script src="https://connect.facebook.net/en_RU/sdk.js#xfbml=1&amp;version=v2.5"></script>


 <!-- FullCalendar CSS (global build) -->
 <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS (global build) -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>


<!-- template js -->
<script src="{{ asset('/assets/js/brote.js') }}"></script>

<!--  -->
</html>
