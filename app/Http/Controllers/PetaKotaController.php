<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PetaKotaController extends Controller
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

        return view('profile.peta', [

            'menu'      => $data2,
            'submenu'   => $data3,
        ]);
    }
}
