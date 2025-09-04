<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'album',
        'album_image',
        'user_id'
    ];

     //join elequent
     public function galeri(){
        return $this->hasMany(Galeri::class, "album_id","id");
    }
}
