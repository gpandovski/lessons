<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
    public function setBestReply($reply) {
        
        $this->best_reply_id = $reply->id;
        $file = public_path('img'.DIRECTORY_SEPARATOR.'img.jpeg');
        $this->save();
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies() 
    {
        return $this->hasMany(Reply::class);
    }
}
