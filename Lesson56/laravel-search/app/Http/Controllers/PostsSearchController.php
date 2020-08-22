<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsSearchController extends Controller
{
    //

    public function index() {

        $q = request('q');

       
        $posts = \App\Post::where('title', 'LIKE', '%' . $q . '%')->orWhere('body', 'LIKE', '%' .$q . '%')->paginate(5);

        // popular posts
        // 
        $posts = Post::popular()->get(); // Post::where('votes', '>', 100)->get();
        // result word highlight 
        return view('posts', ['posts'=>$posts]);
    }
}
