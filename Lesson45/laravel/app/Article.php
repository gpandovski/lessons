<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // we allow mass assignment of this fields
    protected $fillable = ['title', 'excerpt', 'body'];
}
