<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;


class PostController extends Controller
{
    public function index()
    {
        // create a variable and store all of the blog posts 
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        
        return view('posts.index', ['posts' => $posts]);

    }
    
     public function show($id)
    {
        // Showing a single post
        $post = Post::find($id);
        
        return view('posts.show', ['post' => $post]);
    }
    
    public function create()
    {
         return view('posts.create');
    }
    
    public function edit($id)
    {
        //
        $post = Post::find($id);

        return view('posts.edit', ['post' => $post]);
    }
    
    

}