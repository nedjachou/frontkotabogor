<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'file',
        'ket',
        'status',
        'user_id'
    ];
    //join elequent
    public function album(){
        return $this->belongsTo(Album::class, "album_id","id");
    }
}
