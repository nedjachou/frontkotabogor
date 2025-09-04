@extends('layouts.app')

@section('content')
    <div class="mt-6 mb-40">

        <div class="row justify-center">
            <section class="gallery-page gallery-carousel-page" id="galeri">
                <div class="container">
                    <div class="section-title text-center">
                        <span class="section-title__tagline"></span>
                        <h2 class="section-title__title">Agenda Kota Bogor</h2>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                Agenda
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agenda as $row)
                                            <tr>
                                                <td>{{ $row->judul }}</td>
                                                <td>{{ $row->waktu }}</td>
                                                <td>{{ $row->lokasi }}</td>
                                                <td>{{ $row->ket }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
