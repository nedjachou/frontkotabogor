<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PimpinanController extends Controller
{
    public function index()
    {

        $data = DB::table('pimpinan')
            ->where('status', 1)
            ->first();

        if ($data) {
            $data1 = DB::table('program_unggulans')
                ->where([
                    ['status', 1],
                    ['pimpinan_id', $data->id]
                ])
                ->get();
        } else {
            $data1 = collect(); // Menggunakan koleksi kosong jika tidak ada data pimpinan
        }

        $data2 = DB::table('menus')
            ->select('menus.judul', 'menus.link', 'menus.id')
            ->where('induk', 0)
            ->orderBy('urutan', 'ASC')
            ->get();

        $data3 = DB::table('submenus')
            ->select('submenus.judul', 'submenus.link', 'submenus.menu_id')
            ->where('status', 1)
            ->orderBy('id', 'ASC')
            ->get();

        return view('profile.pimpinan', [
            'data'      => $data,
            'data1'     => $data1,
            'menu'      => $data2,
            'submenu'   => $data3,
        ]);
    }
}
