<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //
    public function index() {
        return view('posts.index', ['posts'=> Post::latest()->get()]);
    }

    public function show(Post $post) {
        return view('posts.show-vue', ['post'=>$post]);
    }
}
