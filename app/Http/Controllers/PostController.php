<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;

class PostController extends Controller
{
   function index() {
    // ################## many to many relationship #######################
    // $post = Post::find(1);
    // // $tags = [1, 4];
    // $tags = [1, 4, 3];
    // // $post->tag()->attach($tags);
    // $post->tag()->sync($tags);// it will check already exist or not 
    // dd($post->tag);

    // #####################3 morph relationship ##################################
   //  $video = Video::find(2);
   //  dd($video->comment);

    return view('orm_practice.post_tag_many_many_re');
   }
}
