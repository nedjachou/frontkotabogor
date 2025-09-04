@extends('layouts.app')

@section('content')
    <div class="mt-6 mb-40">
        <h1 class="font-semibold my-12">LAMBANG KOTA BOGOR</h1>

        <div class=" flex justify-center">
            <div class="relative">
                <div  class="absolute -z-[1] w-[300px] " style="right: -70px;">
                    <img src="{{ asset("/assets/images/shapes/vektor-logo-kota.png") }}" alt="vektor logo kota" />
                </div>
                <div class="mt-14 ">
                    <img src="{{ asset("/assets/images/resources/logo-1.png") }}" alt="Logo Kota Bogor" class="h-[150px]"/>
                    <div class="text-white font-normal">
                        Logo Kota Bogor
                    </div>
                </div>
                
            </div>
        </div>
       
        <div >
            <section class="feature-three">
                <div class="container">
                  <div class="row">
                    <!--Feature Three Single Start-->
                    <div
                      class="col-xl-6 col-lg-6 wow slideInLeft h-[150px] mb-32"
                      data-wow-delay="100ms"
                      data-wow-duration="2500ms"
                    >
                      <div class="feature-three__single">
                        <div class="feature-three__top">
                          
                          <div class="feature-three__content">
                            <p class="feature-three__content-box">
                              ELEMEN
                            </p>
                          </div>
                        </div>
                        <p class="feature-three__text-1 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent mollis leo eget orci ultricies semper. Phasellus gravida, 
                            lectus at feugiat condimentum, velit ligula aliquet nisl, et 
                            consequat nisl nibh sit amet risus. Quisque rhoncus a felis quis 
                            aliquet. Aliquam non luctus lorem, at porttitor tortor. Proin 
                            tincidunt lectus risus, sed fringilla nibh dictum in. Praesent at 
                            nisl id metus semper posuere eu quis mauris. Quisque ac elementum velit. 
                        </p>

                        
                      </div>
                    </div>
                    <!--Feature Three Single End-->
                    <!--Feature Three Single Start-->
                    <div
                      class="col-xl-6 col-lg-6 wow slideInRight h-[150px] mb-32"
                      data-wow-delay="100ms"
                      data-wow-duration="2500ms"
                    >
                      <div class="feature-three__single">
                        <div class="feature-three__top">
                         
                          <div class="feature-three__content">
                            <p class="feature-three__content-box">
                              MAKNA
                            </p>
                          </div>
                        </div>
                        <p class="feature-three__text-1 ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent mollis leo eget orci ultricies semper. Phasellus gravida, 
                            lectus at feugiat condimentum, velit ligula aliquet nisl, 
                            et consequat nisl nibh sit amet risus. Quisque rhoncus a felis 
                            quis aliquet. Aliquam non luctus lorem, at porttitor tortor. 
                            Proin tincidunt lectus risus, sed fringilla nibh dictum in. 
                            Praesent at nisl id metus semper posuere eu quis mauris. 
                            Quisque ac elementum velit. 
                        </p>

                       

                      </div>
                    </div>
                    <!--Feature Three Single End-->
                  </div>

                  {{-- <div class="row">
                    <div class="col-xl-12">
                      <div class="feature-three__bottom">
                        <p class="feature-three__bottom-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                          do eiusmod tempor <br />
                          incididunt ut labore et dolore magna aliqua. quis nostrud co
                          laboris.
                        </p>
                        <div class="feature-three__btn-box">
                          <a href="halaman.html" class="thm-btn feature-three__btn"
                            >Lorem ipsum dolor sit amet
                            <i class="fa fa-angle-right"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                </div>
              </section>
        </div>
    </div>
@endsection