<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GeografisController extends Controller
{

    public function index()
    {

        $data = DB::table('halaman')
            ->where('judul', 'Letak Geografis')
            ->first();

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

        return view('profile.geografis', [
            'data'      => $data,
            'menu'      => $data2,
            'submenu'   => $data3,
        ]);
    }
}
