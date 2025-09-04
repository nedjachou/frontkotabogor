<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Album;
use App\Models\Halaman;
use App\Models\Program_unggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HalamanController extends Controller
{
    public function halaman($slug)
    {
        // dd($slug);
        $data = Halaman::where('slug', $slug)->first();

        // jika menu pimpinan daerah
        // if ($slug == 'pimpinan-daerah') {

        //     $data = DB::table('pimpinan')
        //         ->where('status', 1)
        //         ->first();

        //     if ($data) {
        //         $data1 = Program_unggulan::where([
        //             ['status', 1],
        //             ['pimpinan_id', $data->id]
        //         ])->get();
        //     } else {
        //         $data1 = collect(); // Menggunakan koleksi kosong jika tidak ada data pimpinan
        //     }

        //     return view('profile.pimpinan', [
        //         'data'      => $data,
        //         'data1'     => $data1,
        //     ]);
        // }

        // jika menu lambang
        if ($slug == 'lambang') {
            return view('profile.lambang');
        }

        // jika menu galeri
        if ($slug == 'galeri-kbr') {
            $album = Album::orderBy('created_at', 'DESC')->paginate(10);
            return view('profile.galeri.galeri', compact('album'));
        }

        // jika menu peta
        if ($slug == 'peta') {
            return view('profile.peta');
        }

        // jika menu agenda kota bogor
        if( $slug == 'agenda-kota-bogor') {
            $agenda = Agenda::orderBy('created_at', 'DESC')->paginate(10);
            return view('profile.agenda', compact('agenda'));
        }

        // dd($slug);
        if ($data) {
            return view('halaman', compact('data'));
        } else {
            abort(404);
        }
    }
}
