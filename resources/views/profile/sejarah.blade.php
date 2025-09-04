@extends('layouts.app')

@section('content')
    <div class="mt-6 mb-40">
        <h1 class="font-semibold my-12">SEJARAH KOTA BOGOR</h1>

        <div class="flex justify-center">
            <img src="{{ asset('/assets/sejarah/' .$data->file) }}" alt="gambar kota bogor">
        </div>

        <div class="flex justify-center text-justify mx-40 my-12">
           {!! $data->ket !!}
        </div>
    </div>
@endsection