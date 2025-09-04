<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Pemerintah Kota Bogor </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Pemerintah Kota Bogor" />

    <!-- fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


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
</head>



<body class="custom-cursor">
<div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <div class="toggle toggle--daynight">
        <input type="checkbox" id="toggle--daynight" class="toggle--checkbox">
        <label class="toggle--btn" for="toggle--daynight"><span class="toggle--feature"></span></label>

        @include('front.include.header')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/halaman-header.png)">
            </div>
            <div class="page-header-bubble"><img src="#" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Berita</li>
                    </ul>
                    <h2>Berita</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-page">
            <div class="container">
                <div class="row">
                    <!--Blog Page Single Start-->
                    @foreach ($data as $k => $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img">
                            <img src="{{ asset('/assets/berita/'.$item->file) }}" alt="">
                            <a href="berita-detil.html">
                                <span class="blog-one__plus"></span>
                            </a>
                            <div class="blog-one__date">
                                <p>{{ date('d', strtotime($item->tgl_publikasi)) }} <br> <span>{{ date('Y', strtotime($item->tgl_publikasi)) }}</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="list-unstyled blog-one__meta">
                                <li><a href="#"><i class="far fa-user-circle"></i> by Admin Diskominfo </a>
                                </li>
                                
                            </ul>
                            <h3 class="blog-one__title"><a href="#">{{$item->judul}} </a></h3>
                            <div class="blog-one__btn-box">
                                <a href="#">Baca selengkapnya <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="blog-one__tag">
                                <p>{{$item->user_id}} </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Blog Page Single End-->
                </div>
               <!-- <div class="col-lg-12">
                    <div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                    </div> /.blog-post-pagination 
                </div>-->
            </div>
        </section>
        <!--Blog Page End-->

        <!--Information Start-->
        @include("foter");
        <!--Site Footer End-->

        </div>
    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png" width="89"
                        alt="" /></a>
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
        <div style="
            position: absolute; 
            top:185px; 
            color: #fff; 
            font-weight: bolder; 
            pointer-events:none;"> Tutup
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

<a href="#" data-target="html" class="scroll-to-top" style="outline: #fff solid 2px;"><i class="fa fa-angle-up"></i></a>

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
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>




<!-- template js -->
<script src="{{ asset('/assets/js/brote.js') }}"></script>


</html>