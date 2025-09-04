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
                    <li>Berita</li>
                </ul>
                <h2>Berita</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <section class="blog-page">
        <div class="container">
            @if (isset($cari))
                <h1 class="py-3">Cari : {{ $cari }}</h1>
            @endif
            @if (isset($tag))
                <h1 class="py-3">Tag : {{ $tag }}</h1>
            @endif
            <div class="row">
                <!--Blog Page Single Start-->
                @foreach ($data as $k => $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ config('app.eksternal_link') }}/storage/data/{{ $item->file }}"
                                    alt="">
                                <a href="{{ '/berita-detail/' . $item->id }}">
                                    <span class="blog-one__plus"></span>
                                </a>
                                <div class="blog-one__date">
                                    <p>{{ date('d', strtotime($item->tgl_publikasi)) }} /
                                        {{ date('m', strtotime($item->tgl_publikasi)) }} <br>
                                        <span>{{ date('Y', strtotime($item->tgl_publikasi)) }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a><i class="far fa-user-circle"></i> oleh Admin </a>
                                    </li>

                                </ul>
                                <h3 class="blog-one__title h-[100px]"><a
                                        href="{{ '/berita-detail/' . $item->id }}">{{ $item->judul }} </a></h3>
                                <div class="blog-one__btn-box">
                                    <a href="{{ '/berita-detail/' . $item->id }}">Baca selengkapnya <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="blog-one__tag">
                                    <p> {{ $item->user_id }}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--Blog Page Single End-->
            </div>
            <div class="col-lg-12">
                @php
                    $currentPage = $data->currentPage();
                    $lastPage = $data->lastPage();
                @endphp

                <div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
                    {{-- Previous --}}
                    @if ($data->onFirstPage())
                        <span class="page-numbers">‹</span>
                    @else
                        <a class="page-numbers" href="{{ $data->previousPageUrl() }}">‹</a>
                    @endif

                    {{-- First page --}}
                    @if ($currentPage > 3)
                        <a class="page-numbers" href="{{ $data->url(1) }}">1</a>
                        @if ($currentPage > 4)
                            <span class="page-numbers">...</span>
                        @endif
                    @endif

                    {{-- Pages around current page --}}
                    @for ($i = max(1, $currentPage - 2); $i <= min($lastPage, $currentPage + 2); $i++)
                        @if ($i == $currentPage)
                            <span class="page-numbers current">{{ $i }}</span>
                        @else
                            <a class="page-numbers" href="{{ $data->url($i) }}">{{ $i }}</a>
                        @endif
                    @endfor

                    {{-- Last page --}}
                    @if ($currentPage < $lastPage - 2)
                        @if ($currentPage < $lastPage - 3)
                            <span class="page-numbers">...</span>
                        @endif
                        <a class="page-numbers" href="{{ $data->url($lastPage) }}">{{ $lastPage }}</a>
                    @endif

                    {{-- Next --}}
                    @if ($data->hasMorePages())
                        <a class="next page-numbers" href="{{ $data->nextPageUrl() }}">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    @else
                        <span class="page-numbers">›</span>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
