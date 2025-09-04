<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsTags extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'tag_id'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function tag()
    {
        return $this->belongsTo(Tags::class, 'tag_id', 'id');
    }
}
