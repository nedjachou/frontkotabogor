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
                        <a href="/"><img src="{{ asset('/assets/images/resources/logo-1.png') }}"
                                alt=""></a>
                    </div>
                    <ul class="list-unstyled main-header__top-details-list">
                        <li>
                        <div class="icon">
                            <span class="icon-location-1"></span>
                        </div>
                        <div class="text">
                            <h5>Balai Kota Bogor</h5>
                            <p>
                            Jl. Ir. H. Juanda No. 10 Bogor
                            </p>
                        </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="text">
                                <h5>Whatsapp Kota Bogor</h5>
                                <p class="information__number">
                                    <a href="https://api.whatsapp.com/send?phone=+6281122882233&text=Hallo">+62811-2288-2233</a>
                                </p>
                            </div>
                        </li>
                        <li>
                                                  
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>                            
                            <div class="text">
                                <h5>E-mail Pengaduan:</h5>
                                <p><a href="mailto:sibadra@kotabogor.go.id">sibadra@kotabogor.go.id</a></p>
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
                                @foreach ($menus as $menu)
                                    @if ($menu->judul == 'Berita')
                                        <li class="menu-item">
                                            <a href="{{ route('berita') }}">{{ $menu->judul }} </a>
                                        </li>
                                    @elseif ($menu->judul == 'faq')
                                        <li class="menu-item">
                                            <a href="#faq">{{ $menu->judul }} </a>
                                        </li>
                                    @else
                                        <li class="menu-item-has-children">
                                            <a href="{{ $menu->link }}">{{ $menu->judul }} </a>
                                            <ul class="sub-menu" style="text-align: left !important;">
                                                @foreach ($menu->child as $chd)
                                                    @if ($chd->status == '1')
                                                        @if ($chd->kategori == 'Link')
                                                            <li>
                                                                <a href="{{ $chd->link }}"
                                                                    class="text-left" target="blank">{{ $chd->judul }} </a>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <a href="{{ route('halaman', ['slug' => ltrim($chd->link, '/')]) }}"
                                                                    class="text-left">{{ $chd->judul }}</a>
                                                            </li>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__search-box">
                            <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
