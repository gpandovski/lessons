<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Comment extends Model
{
    use Searchable;
    //
    // $term searching word/s
    // public function scopeSearch($query, $term) {
    //     $columns = "title, body";

    //     $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $term); // where you see Raw in laravel it means no sql validation( possible injection)
        
    //     return $query;
    // } for the 27th of June at 8:00 AM
}
