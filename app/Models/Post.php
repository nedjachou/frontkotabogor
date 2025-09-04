<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'file',
        'konten',
        'status',
        'tgl_publikasi',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'posts_tags', 'post_id', 'tag_id')->withTimestamps();
    }

    public function potsTags()
    {
        return $this->hasMany(PostsTags::class, 'post_id', 'id');
    }

}
