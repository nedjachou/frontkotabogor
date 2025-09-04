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

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    {{-- css out --}}
    @stack('before-styles')
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
    <style>
        /* CSS untuk animasi lingkaran */
        #seventyfive-container {
            position: fixed;
            right: 2vw;
            bottom: 1vw;
            z-index: 999999;
            width: 10vw;
            height: 10vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #seventyfive {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 2; /* Pastikan gambar logo berada di atas lingkaran */
        }

        /* Lingkaran animasi */
        .ripple {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(255, 0, 0, 0.7); /* Warna merah dengan sedikit transparansi */
            animation: ripple 2s infinite;
            z-index: 1; /* Lingkaran berada di bawah logo */
        }

        /* Animasi tambahan untuk lingkaran bergelombang */
        .ripple:nth-child(2) {
            animation-delay: 0.5s;
        }
        .ripple:nth-child(3) {
            animation-delay: 1s;
        }

        /* Keyframes untuk efek ripple/gelombang */
        @keyframes ripple {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }


        /* CSS untuk tombol close, disesuaikan agar posisinya benar */
        #cls {
            position: fixed;
            right: 3vw;
            bottom: 9vw;
            z-index: 9999999; /* Pastikan berada di lapisan paling atas */
            color: #f00;
            font-size: 30px;
            cursor: pointer; /* Menandakan elemen bisa diklik */
            font-weight: bold;
            user-select: none; /* Mencegah teks terpilih saat diklik */
        }


        /* Media query untuk tampilan mobile */
        @media only screen and (max-width: 950px) {
            #seventyfive-container {
                right: 20px;
                bottom: 20px;
                width: 100px;
                height: 100px;
            }
            
            #cls {
                right: 15px;
                bottom: 100px;
                font-size: 30px;
            }
        }
        </style>

        <!-- <div id="cls">
            &times;
        </div> -->

        <!-- <div id="seventyfive-container">
            <div class="ripple"></div>
            <div class="ripple"></div>
            <div class="ripple"></div>
            
            <a id="iconhut" target="_blank" href="https://drive.google.com/drive/folders/1jkUhAtPcDqjx-3eiH0ZKcjXbwvK8qEpi">
                <img id="seventyfive" src="https://kotabogor.go.id/assets/images/hut-ri.png" alt="HUT RI" />
            </a>
        </div> -->

        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.getElementById('cls');
            const imageContainer = document.getElementById('seventyfive-container');

            if (closeButton && imageContainer) {
                closeButton.addEventListener('click', function() {
                    // Sembunyikan container gambar dan tombol close
                    imageContainer.style.display = 'none';
                    closeButton.style.display = 'none';
                });
            }
        });
        </script>
    @stack('after-styles')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y8LJYNYQBS"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Y8LJYNYQBS');
        </script>
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    {{-- preloader --}}
    {{-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> --}}
    <!-- /.preloader -->

    <div class="page-wrapper">
        <div class="toggle toggle--daynight">
            <input type="checkbox" id="toggle--daynight" class="toggle--checkbox">
            {{-- <label class="toggle--btn" for="toggle--daynight"><span class="toggle--feature"></span></label> --}}

            @include('includes.header')

            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.stricky-header -->

            @yield('content')

            <section id="kontak">
                @include('includes.footer')
            </section>

        </div>

    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
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
            <form action="{{ route('berita.cari') }}" method="get">
                <label for="search" class="sr-only">Cari disini</label><!-- /.sr-only -->
                <input type="text" id="search" name="key" value="{{ e(request('key')) }}" placeholder="Cari disini..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-top" style="outline: #fff solid 2px;"><i
            class="fa fa-angle-up"></i></a>

    {{-- accesibility --}}
    <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->
    <script src="{{ asset('/assets/js/widget_disabilitas.js') }}" defer></script>
    @stack('before-scripts')
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
    <script type="text/javascript" src="https://widget.komdigi.go.id/gpr-widget-kominfo.min.js"></script>

    <!-- template js -->
    <script src="{{ asset('/assets/js/brote.js') }}"></script>
    @stack('after-scripts')

    <!-- FullCalendar CSS (global build) -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS (global build) -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events : [
            {"id":1,"title":"Meeting","start":"2025-09-05T10:00:00","end":"2025-09-05T12:00:00","location":"Earth"},
            {"id":2,"title":"Conference","start":"2025-09-10T09:00:00","end":"2025-09-12T17:00:00","location":"Mars"}
            ],
            eventColor: '#3788d8',
            contentHeight: 'auto',   // makes height adjust automatically
            expandRows: true,        // prevent cut-off on mobile
            handleWindowResize: true, 
            eventClick: function(info) {
                // alert(info.event.extendedProps.location);
                const props = info.event.extendedProps;
                let activeTooltip = null; // ✅ define here so it's global for this script

const content = `
  <strong>${info.event.title}</strong><br>
  📍 ${props.location || 'N/A'}<br>
  📝 ${props.description || 'No description'}<br>
  🕒 ${info.event.start.toLocaleString()}
`;

// dispose previous tooltip if exists
if (activeTooltip) {
  activeTooltip.dispose();
  activeTooltip = null;
}

// create new tooltip
activeTooltip = new bootstrap.Tooltip(info.el, {
  title: content,
  html: true,
  placement: 'top',
  trigger: 'manual'
});

activeTooltip.show();

// close when clicking outside
document.addEventListener('click', function handler(e) {
  if (!info.el.contains(e.target)) {
    if (activeTooltip) {
      activeTooltip.dispose();
      activeTooltip = null;
    }
    document.removeEventListener('click', handler);
  }
});
}
        });
        calendar.render();

        window.addEventListener('resize', function() {
      if (window.innerWidth < 768 && calendar.view.type !== 'listWeek') {
        calendar.changeView('listWeek');
      } else if (window.innerWidth >= 768 && calendar.view.type !== 'dayGridMonth') {
        calendar.changeView('dayGridMonth');
      }
    });
      });

    </script>
</body>
  <style>
 

 #calendar {
    max-width: 100%;
    width: 100%;
    margin: 20px auto;
    background: #fff;
    padding: 10px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  /* Adjust font sizes on small screens */
  @media (max-width: 768px) {
    .fc .fc-toolbar-title {
      font-size: 1rem; /* smaller title */
    }
    .fc .fc-daygrid-day-number {
      font-size: 0.75rem;
    }
  }

    /* Header toolbar */
    .fc .fc-toolbar-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: #111827;
    }

    .fc .fc-button {
      background: #2563eb;
      border: none;
      color: white;
      border-radius: 0.5rem;
      padding: 6px 12px;
      transition: background 0.2s;
    }

    .fc .fc-button:hover {
      background: #1d4ed8;
    }

    /* Day cells */
    .fc .fc-daygrid-day {
      transition: background 0.2s;
    }

    .fc .fc-daygrid-day:hover {
      background: #f3f4f6;
    }

    /* Event styles */
    .fc-event {
      border: none !important;
      border-radius: 0.5rem !important;
      padding: 4px 6px !important;
      font-size: 0.875rem;
      font-weight: 500;
      color: white !important;
      background: linear-gradient(135deg, #2563eb, #3b82f6);
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .fc-event:hover {
      opacity: 0.9;
      
    }

   /* ✅ Fix toolbar layout */
   .fc .fc-toolbar {
      display: flex !important;
      justify-content: space-between !important;
      align-items: center !important;
      flex-wrap: nowrap !important; /* prevent stacking */
      width: 100% !important;
    }
    .fc-toolbar-chunk {
      flex: 1 1 0 !important;
    }
    .fc-toolbar-chunk:first-child { text-align: left; }
    .fc-toolbar-chunk:nth-child(2) { text-align: center; }
    .fc-toolbar-chunk:last-child { text-align: right; }

    /* Optional: shrink title font on mobile */
    @media (max-width: 576px) {
      .fc .fc-toolbar-title {
        font-size: 0.9rem;
      }
    }
  </style>
</html>
