<div class="container">
    <div class="row">
        <div class="col-xl-6">
            <div class="welcome-one__left">
                <div class="welcome-one__bg"
                    style="background-image: url(/assets/images/backgrounds/welcome-one-bg.png);  height: 500px;"  >
                </div>
                <div class="welcome-one__main-box wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="welcome-one__circle-one" ></div>
                    <div class="welcome-one__img-1">
                        <img src="{{ asset('assets/images/resources/rubo.gif') }}" alt="" >
                        <div class="welcome-one__small-img-1 float-bob-x">
                            <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $profil->foto_wakil_walikota }}"
                                alt="" width="167" height="167">
                        </div>
                        <div class="welcome-one__small-img-2 float-bob-y">
                            <img src="{{ config('app.eksternal_link') }}/storage/foto/{{ $profil->foto_walikota }}"
                                alt="{{ $profil->foto_walikota }}" width="167" height="167">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="welcome-one__right">
                <div class="section-title text-left">

                    <h2 class="section-title__title">“{{ $profil->judul }}”</h2>
                </div>
                <p class="welcome-one__text-1">
                    {!! $profil->keterangan !!}
                </p>
                {{-- <p class="welcome-one__text-2">Program Wali Kota dan Wakil Wali Kota Tahun 2019 - 2024 merupakan
                janji-janji kampanye Wali Kota dan Wakil Wali Kota yang strategis dan prioritas untuk dilaksanakan
                pada tahun 2019 - 2024. Program unggulan ini salah satu arah kebijakan terhadap pencapaian visi dan
                misi pembangunan Kota Bogor tahun 2019 - 2024. Program unggulan 2019 - 2024 meliputi :</p> --}}
                {{-- <div class="welcome-one__points-box">
                    <ul class="list-unstyled welcome-one__points">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BOGOR LANCAR</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BOGOR MERENAH</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>ABDI BOGOR</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled welcome-one__points welcome-one__points-two">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BOGOR KASOHOR</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BOGOR MOTEKAR</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <p>BOGOR SAMAWA</p>
                            </div>
                        </li>
                    </ul>

                </div> --}}
            </div>
        </div>
    </div>
</div>
