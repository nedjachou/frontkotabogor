<header class="main-header clearfix" id="beranda">
    <div class="main-header__top">
        <div class="main-header__top-social-box">
            <div class="container">
                <div class="main-header__top-social-box-inner">
                    <p class="main-header__top-social-text">Selamat Datang Bogorian!</p>
                    <div class="main-header__top-social">
                        <a href="https://twitter.com/pemkotabogor"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/PemerintahKotaBogor"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/c/PemerintahKotaBogor"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/pemkotbogor/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header__top-details">
            <div class="container">
                <div class="main-header__top-details-inner">
                    <div class="main-header__logo">
                        <a href="index.html"><img src="{{ asset('/assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                    <ul class="list-unstyled main-header__top-details-list">
                        <li>
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="text">
                                <h5>E-mail Informasi :</h5>
                                <p><a href="mailto:bag.humas@kotabogor.go.id">bag.humas@kotabogor.go.id</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="text">
                                <h5>E-mail Pengaduan :</h5>
                                <p><a href="mailto:sibadra@kotabogor.go.id">sibadra@kotabogor.go.id</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="text">
                                <h5>E-mail Admin Web :</h5>
                                <p><a href="mailto:kominfo@kotabogor.go.id">kominfo@kotabogor.go.id</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner clearfix">
                    <div class="main-menu__left">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list one-page-scroll-menu">
                                @foreach ($data2 as $k => $item)
                                    <li>
                                        <a href="{{ $item->link }}" target="_blank">{{ $item->judul }} </a>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="#pengumuman">Pengumuman</a>
                                </li>
                                <li>
                                    <a href="#berita">Berita</a>
                                </li>
                                <li>
                                    <a href="#galeri">Galeri</a>
                                </li>
                                <li>
                                    <a href="#faq">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>
