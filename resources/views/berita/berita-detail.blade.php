@extends('layouts.app')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('assets/images/backgrounds/halaman-header.png') }})">
        </div>
        <div class="page-header-bubble"><img src="#" alt=""></div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Beranda</a></li>
                    <li><span>/</span></li>
                    <li>Berita Detil</li>
                </ul>
                <h2>Berita Detil</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="blog-details">

        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">

                        <div class="blog-details__img">
                            <img src="{{ config('app.eksternal_link') }}/storage/data/{{ $data->file }}" alt="">
                        </div>

                        <div class="blog-details__content">
                            <ul class="list-unstyled blog-details__meta">
                                <li>
                                    <a href="{{ '/berita-detail/' . $data->id }}"><i class="far fa-user-circle"></i> oleh
                                        Admin
                                    </a>
                                </li>

                            </ul>
                            <h3 class="blog-details__title">
                                {{ $data->judul }}
                            </h3>
                            <p class="blog-details__text-1">
                                {!! $data->konten !!}
                            </p>

                        </div>
                        <div class="blog-details__bottom">
                            <p class="blog-details__tags">
                                <span>Tags</span>
                                @foreach ($data->tags as $row)
                                    <a href="{{ route('berita.tag', $row->nama_tag) }}">{{ $row->nama_tag }}</a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__search">
                            <form action="{{ route('berita.cari') }}" method="get" class="sidebar__search-form">
                                <input type="search" name="key" placeholder="Cari berita">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="sidebar__single sidebar__comments">
                            <h3 class="sidebar__title">Berita Terbaru</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach ($dataTerbaru as $row)
                                    <li>
                                        {{-- <div class="sidebar__post-image"> --}}
                                        <img src="{{ config('app.eksternal_link') }}/storage/data/{{ $row->file }}"
                                            alt="" width="80px" class="img-thumbnail">
                                        {{-- </div> --}}
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="{{ '/berita-detail/' . $row->id }}">
                                                    {{ $row->judul }}
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
