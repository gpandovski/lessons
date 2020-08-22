<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class PostsFullTextSearchController extends Controller
{
    //
    public function index() {

        $q = request('q');

        $comments =  Comment::search( $q )->paginate(5);

        // result word highlight 
        return view('comments', ['comments'=>$comments]);
    }

    // public function show() {
    //     // popular posts
    //     $posts = Post::where('votes', '>', 120)->get();
    //     return $posts;
    // }
}
