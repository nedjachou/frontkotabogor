@extends('layouts.app')

@section('content')
    <div class="mt-6 mb-40">
        <br>
        <h1 class="font-semibold my-12">{{ $data->judul }} </h1>
        <br>
        @if ($data->file && $data->file !== 'tidak ada file')
            <div class="flex justify-center">
                <img src="{{ config('app.eksternal_link') }}/storage/data/{{ $data->file }}" alt="{{ $data->judul }}">
            </div>
        @endif

        <div class="justify-center text-justify mx-40 my-12" align="center">
            <div class="row">
                <div class="col-2">

                </div>
                <div class="col-8">
                <br> {!! $data->ket !!} {{$data}}
                </div>
                <div class="col-2">

                </div>
            </div>
            
        </div>
    </div>
@endsection
