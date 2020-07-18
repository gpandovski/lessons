<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function isBest() {
        // $post->best_reply_id === $reply->id
        // $reply->id === $post->best_reply_id
        
        return $this->id === $this->post->best_reply_id; // $this = $reply (Reply model)
    }

    public function user()
    {
        return $this->belongsTo( User::class,'user_id');
    }

    public function post() 
    {
        return $this->belongsTo( Post::class);
    }
}
