<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $berita = Post::where('status', 1)
            ->orderBy('tgl_publikasi', 'DESC')
            ->paginate(9);

        return view('berita.berita', [
            'data' => $berita,
        ]);
    }

    public function cariBerita(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'key' => 'nullable|string|max:255'
        ]);

        // Ambil dan bersihkan input pencarian
        $cari = strip_tags($validated['key']); // Hapus tag HTML dan JS

        $berita = Post::where('status', 1)
            ->where('judul', 'like', '%' . $cari . '%')
            ->orderBy('tgl_publikasi', 'DESC')
            ->paginate(9);

        return view('berita.berita', [
            'data' => $berita,
            'cari' => $cari,
        ]);
    }

    public function beritaTag($tag)
    {
        $berita = Post::where('status', 1)
            ->whereHas('tags', function ($query) use ($tag) {
                $query->where('nama_tag', $tag);
            })
            ->orderBy('tgl_publikasi', 'DESC')
            ->paginate(9);

        return view('berita.berita', [
            'data' => $berita,
            'tag' => $tag,
        ]);
    }
}
