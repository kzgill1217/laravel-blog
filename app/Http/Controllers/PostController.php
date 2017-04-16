<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;


class PostController extends Controller
{
    
     public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show', ['post' => $post]);
    }

}