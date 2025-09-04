<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_aktifitas extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'tgl_aktifitas',
        'user_id'
    ];

     //join elequent
     public function user(){
        return $this->belongsTo(User::class, "user_id","id");
    }
}
