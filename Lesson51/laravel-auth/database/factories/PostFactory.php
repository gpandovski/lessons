<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\Reply;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'=> factory(\App\User::class),
        'title' => $faker->sentence,
        'body'=> $faker->paragraph
    ];
});

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id'=> App\User::inRandomOrder()->first(),
        'post_id' =>  factory(\App\Post::class),
        'body'=> $faker->paragraph
    ];
});