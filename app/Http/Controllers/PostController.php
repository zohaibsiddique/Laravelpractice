<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller
{
    public function show($slug){
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('welcome', ['post' => $post]);
    }
}
