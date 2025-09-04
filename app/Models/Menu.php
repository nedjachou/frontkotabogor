<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'induk',
        'urutan',
        'link',
        'kategori',
        'status',
        'user_id'
    ];

    // if kategori = 1 then return menu halaman or kategori = 0 menu link
    public function getKategoriAttribute($value)
    {
        return $value == 1 ? 'Halaman' : 'Link';
    }

    // induk itu parent dari menu yang diambil dari id
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'induk');
    }

    // child itu menu yang diambil dari parent
    public function child()
    {
        // orderBy('urutan', 'asc') itu mengurutkan menu berdasarkan urutan
        return $this->hasMany(Menu::class, 'induk')->orderBy('urutan', 'asc');
    }
}
