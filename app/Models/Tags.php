<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $fillable = ['nama_tag'];

    public function postsTags(){
        return $this->hasMany(PostsTags::class, 'tag_id', 'id');
    }

    public function posts(){
        return $this->belongsToMany(Post::class, 'posts_tags', 'tag_id', 'post_id')->withTimestamps();
    }

}
