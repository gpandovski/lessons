<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LikesController extends Controller
{
    //
    public function store()
    {
        $post = Post::find(request('id'));
        $post->like = $post->like + 1;
        $post->save();

        return response()->json([
            'status' => 'success',
            'likes' => $post->like
        ]);
    }
}
