<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    //  #################### morphOne relationship with post and comment
    public function comment() {
        //return $this->morphOne(Comment::class, 'commentable');// it will return single first row of comment after matching
        return $this->morphMany(Comment::class, 'commentable');
    }
}
