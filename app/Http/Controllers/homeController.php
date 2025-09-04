<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Banner;
use App\Models\Post;
use App\Models\Profil;
use App\Models\Slider;
use Illuminate\Http\Request;
use DB; //import fungsi query builder
use Illuminate\Support\Carbon;

class homeController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', 1)
            ->orderBy('created_at', 'ASC')
            ->get();

        $profil = Profil::first();

        $berita = Post::where('status', 1)
            ->orderBy('tgl_publikasi', 'DESC')
            ->limit(4)
            ->get();

        $banner = Banner::orderBy('id', 'ASC')->get();

        $today = Carbon::today();
        // $agenda = Agenda::whereDate('waktu_mulai', $today)->orderBy('waktu_mulai', 'DESC')->limit(5)->get();
        $agenda = Agenda::orderBy('waktu_mulai', 'DESC')->limit(5)->get();

        return view('home', compact('slider', 'profil', 'berita', 'banner', 'agenda'));
    }
}
