<section class="information">
    <div class="container">
        <div class="information__inner">
            <div class="information__logo-box">
                <div class="information__border-1"></div>
                <div class="information__border-2"></div>
                <a href="/"><img src="{{ asset('assets/images/resources/information-logo.png') }}"
                        alt="" /></a>
            </div>
            <ul class="list-unstyled information__list">
                <li>
                    <div class="information__icon">
                        <span class="icon-phone"></span>
                    </div>
                    <div class="information__content">
                        <p class="information__sub-title">Email Pengaduan</p>
                        <h5 class="information__number">
                            <a href="mailto:622518321075">sibadra@kotabogor.go.id</a>
                        </h5>
                    </div>
                </li>
                <li>
                    <div class="information__icon">
                        <span class="icon-location-1"></span>
                    </div>
                    <div class="information__content">
                        <p class="information__sub-title">Balai Kota Bogor</p>
                        <h5 class="information__number">
                            Jl. Ir. H. Juanda No. 10 Bogor
                        </h5>
                    </div>
                </li>
                <li>
                    <div class="information__icon">
                        <span class="icon-phone"></span>
                    </div>
                    <div class="information__content">
                        <p class="information__sub-title">Whatsapp Kota Bogor</p>
                        <h5 class="information__number">
                            <a href="https://api.whatsapp.com/send?phone=+6281122882233&text=Hallo">+62811-2288-2233</a>
                        </h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Information End-->

<!--Site Footer Start-->
<footer class="site-footer">
    <div class="site-footer-shape-1"
        style="
        background-image: url({{ asset('assets/images/shapes/site-footer-shape-1.png') }});
      ">
    </div>
    <div class="site-footer-shape-two">
        <img src="{{ asset('assets/images/shapes/tes.png') }}" alt="" />
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <h3 class="footer-widget__title">
                            Tentang Pemerintah Kota Bogor
                        </h3>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">
                                Pemerintah Kota Bogor merupakan lembaga pemerintahan yang bertanggung jawab dalam
                                mengelola administrasi, pembangunan, dan pelayanan publik di wilayah Kota Bogor, Jawa
                                Barat.
                            </p>
                        </div>
                        <div class="site-footer__social">
                            <a href="https://twitter.com/pemkotabogor"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/PemerintahKotaBogor"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.youtube.com/c/PemerintahKotaBogor"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.instagram.com/pemkotbogor/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Aplikasi Daerah</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li>
                                <a href="https://bsw.kotabogor.go.id/">BSW Kota Bogor</a>
                            </li>
                            <li>
                                <a href="https://sibadra.kotabogor.go.id/#/download">Sibadra</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__articles clearfix">
                        <h3 class="footer-widget__title">Berita</h3>
                        <ul class="footer-widget__articles-list list-unstyled clearfix">
                            @foreach ($berita->take(2) as $row)
                                <li>
                                    <div class="footer-widget__articles-img">
                                        <img src="{{ config('app.eksternal_link') }}/storage/data/{{ $row->file }}"
                                            alt="" />
                                        <a href="{{ '/berita-detail/' . $row->id }}"><span
                                                class="fa fa-link"></span></a>
                                    </div>
                                    <div class="footer-widget__articles-content">
                                        <p class="footer-widget__articles-date">
                                            {{ date('d, M-Y', strtotime($row->tgl_publikasi)) }}
                                        </p>
                                        <h5 class="footer-widget__articles-sub-title">
                                            <a href="{{ '/berita-detail/' . $row->id }}">
                                                {{ $row->judul }}
                                            </a>
                                        </h5>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">
                            ©Copyright 2023 All right reserved.
                            <a href="http://diskominfo.kotabogor.go.id/"> Dinas Komunikasi dan Informatika Kota
                                Bogor</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
