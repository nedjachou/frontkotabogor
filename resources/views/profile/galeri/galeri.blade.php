@extends('layouts.app')

@section('content')
    <div>

        <h1 class="font-semibold mt-12">ALBUM GALERI KOTA BOGOR</h1>

        <section class="blog-page">
            <div class="container">
                <div class="row">
                    @foreach ($album as $row)
                        <!--Blog Page Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img" style="width: 100%; height: 250px; overflow: hidden;">
                                    <img src="{{ config('app.eksternal_link') }}/storage/album/{{ $row->album_image }}"
                                        alt="{{ $row->album_image }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    <a href="{{ route('galeri-detail', ['galeri' => $row->id]) }}">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="{{ route('galeri-detail', ['galeri' => $row->id]) }}"><i
                                                    class="fas fa-film"></i> {{ $row->album }} </a>
                                        </li>
                                        {{-- <li><a href="galeri-detil.html"><i class="far fa-comments"></i> 250 file</a>
                                        </li> --}}
                                    </ul>
                                    <div class="blog-one__btn-box">
                                        <a href="{{ route('galeri-detail', ['galeri' => $row->id]) }}">Lihat Album <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="blog-one__tag">
                                        <p>Foto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog Page Single End-->
                    @endforeach

                </div>
                {{-- <div class="col-lg-12">
            <div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
            </div><!-- /.blog-post-pagination -->
        </div> --}}
            </div>
        </section>
    </div>
@endsection
