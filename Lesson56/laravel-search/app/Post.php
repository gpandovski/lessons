<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // scope
    // Post::popular()->get()
    public function scopePopular ($query, $number=100) {
        return $query->where('votes', '>', $number);
    }
    // Post::active()->get()
    public function scopeActive ($query) {
        return $query->where('status', '=', 1);
    }
}
