@extends('layouts.app')

@section('content')
    <div class="my-12">
        <section class="gallery-page">
            <div class="container">
                <div class="row">
                    @foreach ($galeri as $row)
                        <!--Gallery Page Single Start-->
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="gallery-page__single">
                                <div class="gallery-page__img">
                                    <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $row->file }}"
                                        alt="{{ $row->file }}">
                                    <div class="gallery-page__icon">
                                        <a class="img-popup"
                                            href="{{ config('app.eksternal_link') }}/storage/foto/{{ $row->file }}"><span
                                                class="icon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Gallery Page Single End-->
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <div class="blog-pagination portfolio-page__btn-box justify-content-center text-center">
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="#">2</a>
                        <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                    </div><!-- /.blog-post-pagination -->
                </div>
            </div>
        </section>
    </div>
@endsection
