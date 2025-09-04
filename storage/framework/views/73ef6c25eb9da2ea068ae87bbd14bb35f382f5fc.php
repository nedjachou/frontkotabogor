<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Pemerintah Kota Bogor</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('/assets/images/favicons/apple-touch-icon.png')); ?>" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo e(asset('/assets/images/favicons/favicon-32x32.png')); ?>" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo e(asset('/assets/images/favicons/favicon-16x16.png')); ?>" />
    <link rel="manifest" href="<?php echo e(asset('/assets/images/favicons/site.webmanifest')); ?>" />
    <meta name="description" content="Pemerintah Kota Bogor" />

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    
    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/bootstrap/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/animate/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/animate/custom-animate.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/fontawesome/css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/jarallax/jarallax.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/nouislider/nouislider.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/nouislider/nouislider.pips.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/odometer/odometer.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/swiper/swiper.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/brote-icons/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/tiny-slider/tiny-slider.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/reey-font/stylesheet.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/owl-carousel/owl.carousel.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/owl-carousel/owl.theme.default.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/bxslider/jquery.bxslider.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/vegas/vegas.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/jquery-ui/jquery-ui.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/vendors/timepicker/timePicker.css')); ?>" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/brote.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/brote-responsive.css')); ?>" />
   
    <?php echo $__env->yieldPushContent('after-styles'); ?>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js'></script>

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <div class="toggle toggle--daynight">
            <input type="checkbox" id="toggle--daynight" class="toggle--checkbox">
            


            <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div>

            


            <?php echo $__env->yieldContent('content'); ?>

            <section id="kontak">
                <?php echo $__env->make('includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </section>
        </div>
    </div>

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
             <form action="<?php echo e(route('berita.cari')); ?>" method="get">
                <label for="search" class="sr-only">Cari disini</label><!-- /.sr-only -->
                <input type="text" id="search" name="key" placeholder="Cari disini..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>

    <a href="#" data-target="html" class="scroll-to-top" style="outline: #fff solid 2px;"><i
            class="fa fa-angle-up"></i></a>


    
    <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->
    <script src="<?php echo e(asset('/assets/js/widget_disabilitas.js')); ?>" defer></script>

    <?php echo $__env->yieldPushContent('before-scripts'); ?>
    
    <script src="<?php echo e(asset('/assets/vendors/jquery/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jarallax/jarallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-appear/jquery.appear.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-validate/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/nouislider/nouislider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/odometer/odometer.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/swiper/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/tiny-slider/tiny-slider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/wnumb/wNumb.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/wow/wow.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/isotope/isotope.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/countdown/countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/bxslider/jquery.bxslider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/bootstrap-select/js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/vegas/vegas.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/jquery-ui/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/timepicker/timePicker.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/circleType/jquery.circleType.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/vendors/circleType/jquery.lettering.min.js')); ?>"></script>
    <script src="https://connect.facebook.net/en_RU/sdk.js#xfbml=1&amp;version=v2.5"></script>
    <!-- template js -->
    <script src="<?php echo e(asset('/assets/js/brote.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('after-scripts'); ?>

    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });

    </script>
</body>
</html>
<?php /**PATH /Users/ineza/Desktop/kotabogor/front/resources/views/layouts/app.blade.php ENDPATH**/ ?>