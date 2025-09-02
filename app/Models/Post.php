<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public function tag() {
    //     return $this->belongsToMany(Tag::class);
    // }


    // ######################## morph one relationship ###################
    public function comment() {
        return $this->morphOne(Comment::class, 'commentable');
    }
}
