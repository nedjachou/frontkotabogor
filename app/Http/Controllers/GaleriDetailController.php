<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use DB;

class GaleriDetailController extends Controller
{
    public function index()
    {
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

        return view('profile.galeri.galeri-detail', [

            'menu'      => $data2,
            'submenu'   => $data3,
        ]);
    }

    public function detail($id) {
        $galeri = Galeri::where('album_id', $id)->get();

        return view('profile.galeri.galeri-detail', [
            'galeri' => $galeri,
        ]);
    }
}
