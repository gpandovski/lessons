<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class PostBestReplyController extends Controller
{
 
    public function store(Reply $reply) {

        // if( Gate::denies('update', $reply->post)) {

        // }
        // if( Gate::allows( 'create', $reply->post)) {
        //     Post::create([
        //         request()
        //     ]);
        // }

        $this->authorize('update', $reply->post);

        $reply->post->setBestReply($reply);

        return back();
    }
}
