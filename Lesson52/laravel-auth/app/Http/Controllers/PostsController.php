<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts'=> Post::all()
        ]);
    }

    public function show ( Post $post )
    {
        // $this->authorize('view', $post);

        return view('posts.show', [
            'post'=> $post
        ]);
    }
}
