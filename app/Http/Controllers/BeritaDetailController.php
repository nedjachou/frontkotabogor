<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class BeritaDetailController extends Controller
{
    public function index($id)
    {
        $berita = Post::with('tags')->where('id', $id)
            ->orderBy('created_at', 'DESC')
            ->limit(4)
            ->first();

        $beritaTerbaru = Post::where('status', 1)
            ->orderBy('created_at', 'DESC')
            ->limit(4)
            ->get();

        return view('berita.berita-detail', [
            'data' => $berita,
            'dataTerbaru' => $beritaTerbaru,
        ]);
    }
}
