<div class="mx-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets/images/shapes/bg-putih.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class="icon-buildings"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="/detail/perangkat-daerah" target="_blank">Perangkat Daerah</a>
                                </h3>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Informasi Terkait Perangkat Daerah dan Kelurahan</p>
                            </div>
                        </div>
                        <div class="services-one__overly-box"
                            style="background-image: url(assets/images/shapes/bg-overlay.png);">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets/images/shapes/bg-putih.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class="icon-buildings"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="/detail/perangkat-daerah" target="_blank">Puskesmas</a></h3>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Informasi Terkait Puskesmas Kota Bogor</p>
                            </div>
                        </div>
                        <div class="services-one__overly-box"
                            style="background-image: url(assets/images/shapes/bg-overlay.png);">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="services-one__single">
                        <div class="services-one__single-top-bubble"
                            style="background-image: url(assets/images/shapes/bg-putih.png);">
                        </div>
                        <div class="services-one__icon">
                            <span class="icon-location-1"></span>
                        </div>
                        <div class="services-one__single-inner">
                            <div class="services-one__title-box">
                                <h3 class="services-one__title"><a href="https://satupeta.kotabogor.go.id/maps" target="_blank">Peta
                                        Kota Bogor</a></h3>
                            </div>
                            <div class="services-one__text-box">
                                <p class="services-one__text">Garis Batas Wilayah Peta Kota Bogor</p>
                            </div>
                        </div>
                        <div class="services-one__overly-box"
                            style="background-image: url(assets/images/shapes/bg-overlay.png);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row">        
        <div class="col-md-6">
            <div class="wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
            <div class="feature-three__single pb-2">
                <div class="feature-three__top d-flex justify-content-center">
                    <p class="feature-three__content-box">Agenda Kota </p>
                </div>
                <div class="feature-three__points-box">
                <hr>
                <ul class="list-unstyled feature-three__points"> 
                    @foreach ($agenda as $row)
                    <li class="mb-3">
                        <div class="card bg-light shadow-sm rounded-4 p-2">
                            <div class="row g-2 align-items-center">

                            <!-- Kotak Tanggal -->
                            <div class="col-auto">
                                <div class="text-center rounded-4 bg-white p-2 shadow-sm"
                                    style="width:70px;">
                                <h6 class="mb-0 text-uppercase" style="font-size:0.8rem;">
                                    {{ \Carbon\Carbon::parse($row->waktu_mulai)->format('M') }}
                                </h6>
                                <h4 class="fw-bold mb-0">
                                    {{ \Carbon\Carbon::parse($row->waktu_mulai)->format('d') }}
                                </h4>
                                </div>
                            </div>

                            <!-- Logo -->
                            <div class="col-auto">
                                <img src="{{ asset('/assets/images/resources/logo-1.png') }}" 
                                    class="img-fluid rounded-3" 
                                    style="width:60px; height:60px; object-fit:cover;">
                            </div>

                            <!-- Isi -->
                            <div class="col-md flex-grow-1" style="max-width:420px;">
                                <h6 class="fw-bold mb-1 text-wrap">{{ $row->judul }}</h6>
                                <p class="card-text mb-1 text-wrap">
                                <small class="text-muted">
                                <span class="icon-location-1"></span>{{ $row->lokasi }}   <br><span class="icon-time"></span> {{ \Carbon\Carbon::parse($row->waktu_mulai)->format('H:i') }}
                                </small>
                                </p>
                            </div>

                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
                </div>
            </div>
            </div>
        </div>
       
    <div class="col-6">
    <h1 style="text-align:center; margin-bottom:20px; font-size:2rem; font-weight:700; color:#111827;">
    📅 Event Calendar
  </h1>
        <div id="calendar"></div>
        <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white py-2">
          <h6 class="modal-title" id="eventModalLabel">Event</h6>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-sm">
          <p><strong>Title:</strong> <span id="modalEventTitle"></span></p>
          <p><strong>Start:</strong> <span id="modalEventStart"></span></p>
          <p><strong>End:</strong> <span id="modalEventEnd"></span></p>
        </div>
      </div>
    </div>
  </div>
    </div>
    </div>
</div>
</div>
