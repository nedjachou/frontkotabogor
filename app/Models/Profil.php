<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_walikota',
        'foto_wakil_walikota',
        'judul',
        'keterangan'
    ];
}
