<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
 
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'title' => $faker->sentence,
        'body'=> $faker->paragraph,
        'banner'=> 'http://placehold.it/750x300'
    ];
});
 