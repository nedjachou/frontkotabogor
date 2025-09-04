<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'waktu',
        'lokasi',
        'waktu_mulai',
        'waktu_selesai',
        'ket',
        'status',
        'user_id'
    ];
}
