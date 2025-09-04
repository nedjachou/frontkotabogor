@extends('layouts.app')



@section('content')
    <div>

        <h1 class="font-semibold my-12">PIMPINAN DAERAH KOTA BOGOR</h1>

        <div class=" flex justify-center">
            <div class="relative">
                <div class="absolute -z-[1]">
                    <img src="{{ asset('/assets/images/shapes/pimpinan-daerah-shape.png') }}" alt="vektor pimpinan daerah" />
                </div>
                <div class="mt-8">
                    <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $data->foto_pimpinandaerah }}"
                        alt="pimpinan daerah" />
                    <div class="text-white font-normal">
                        Walikota dan Wakil Walikota Bogor
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-32 mx-10 border-t-8 border-[#ffb400]">
            <div class="text-left text-white text-lg font-medium -translate-y-6 bg-[#ffb400] px-6 py-2 rounded-3xl w-fit">
                Walikota Bogor
            </div>

            <div class="comment-one">
                <h3 class="comment-one__title">2 Komentar</h3>
                <div class="comment-one__single">
                    <div class="comment-one__image">
                        <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $data->foto_walikota }}"
                            alt="foto walikota bogor" width="1000px">
                    </div>
                    <div class="comment-one__content">
                        <h3>{{ $data->nama_walikota }}</h3>
                        <p style="text-align: justify;">
                            {{ $data->profil_walikota }}
                        </p>
                        {{-- <a href="berita-detil.html" class="thm-btn comment-one__btn">Reply</a> --}}
                    </div>
                </div>

            </div>
        </div>

        <div class=" mx-10 border-t-8 border-[#ffb400]">
            <div class="text-left text-white text-lg font-medium -translate-y-6 bg-[#ffb400] px-6 py-2 rounded-3xl w-fit">
                Wakil Walikota Bogor
            </div>

            <div class="comment-one">

                <div class="comment-one__single">
                    <div class="comment-one__image">
                        <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $data->foto_walikota }}"
                            alt="foto wakil walikota bogor" width="1000px">
                    </div>
                    <div class="comment-one__content">
                        <h3>{{ $data->nama_wakilwalikota }}</h3>
                        <p style="text-align: justify;">
                            {{ $data->profil_wakilwalikota }}
                        </p>
                        {{-- <a href="berita-detil.html" class="thm-btn comment-one__btn">Reply</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <h1 class="font-semibold my-12">PROGRAM UNGGULAN PIMPINAN DAERAH KOTA BOGOR</h1>

        <div class="flex flex-wrap gap-y-10 mr-10 mb-40">

            @foreach ($data1 as $i => $item)
                <div class="col-xl-4 wow fadeInLeft h-[250px]" data-wow-delay="100ms">
                    <div class="feature-two__single  h-[250px]">
                        {{-- <div class="feature-two__icon">
                    <img src="assets/images/icon/smartcity.png" alt="">
                </div> --}}
                        <div class="feature-two__content text-left">
                            <h3 class="feature-two__title "><a>{{ $item->judul }}</a></h3>
                            <div class="feature-two__text">
                                {{ $item->konten }}
                            </div>
                        </div>
                        <div class="feature-two__star-1">
                            <img src="assets/images/shapes/feature-two-star-1.png" alt="">
                        </div>
                        <div class="feature-two__star-2">
                            <img src="assets/images/shapes/feature-two-star-2.png" alt="">
                        </div>
                        <div class="feature-two__star-3">
                            <img src="assets/images/shapes/feature-two-star-3.png" alt="">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
