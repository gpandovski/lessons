<?php

/**
 * Laravel collections
 * Collections is a wrapper class to work with arrays. 
 * Laravel Eloquent queries use a set of the most common functions to return database result.
 * 
 * https://laravel.com/docs/7.x/collections
 * 
 * php artisan tinker
 * to play with collections
 */
 
$articles  = App\Article::first();  // returns an instance of Article class ( Article model)

$articles  = App\Article::all(); // return Collection - Collection class Laravel Colletions with usefull methods on it 

// convert to just array

$articlesArray = $articles->toArray(); // return just ususal old good PHP assoc array

$articles = Article::where('id', '>', 10)->get(); // request  database -> "give me all records with id bigger than 10"

$articles->where('id', '>', 5); // we dont touch the database, we make a search in already received data from database

// Laravel collection method WHERE will do something simillar if you make it yourself with foreach loop
// $tags = Article::first()->tags;

// $longTagName = returnFirstBiggerThanFive($tags);

// function returnFirstBiggerThanFive($tags) {

//     foreach ($tags as $tag) {

//         if(strlen($tag->name) > 5) {
//             return $tag;
//         }
//     }

// }

$tags = Article::first()->tags;

// $longTagName = $tags->first( function($tag) { return strlen($tag->name) > 5; });

$longTagName = $tags->first( function($tag) { 
    return strlen($tag->name) > 5;
});
 
$articles = Article::with('tags')->get(); // return Articles togather with tags ( eager loading of "tags");

$relevantTags = $articles->pluck('tags.*.name')
                ->collapse()
                ->unique()
                ->map(function($item){
                    return ucfirst($item);
                }); // return all tags from all articles with capital first letter
// [
//     0 => "Php",
//     1 => "Laravel",
//     2 => "Education",
//     5 => "Work",
//   ],
// $relevantTags = $articles->pluck('tags')->collapse()->pluck('name')->unique()->map(function($item){return ucfirst($item);}); // same as above




