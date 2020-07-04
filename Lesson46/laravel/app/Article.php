<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // we allow mass assignment of this fields
    protected $fillable = ['title', 'excerpt', 'body'];

    public function author() { // users
        return $this->belongsTo(User::class, 'user_id');// "select * from articles where  user_id= 1"
    }

    public function tags() {
        return $this->belongsToMany(Tag::class); // many to many relation (tags can have many articles and acrticles can have many tags)
    }

}

// article has many tags
// tags can have many articles and acrticles can have many tags


// User::class -> App\User


// $article = Article::find(1); // select * from articles where id=1 
 
// $article->user // select * from users where id = $article->user_id


