<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(['email'=>'test@laravel.test', 'password'=>\Hash::make('secret')]);

        factory(App\User::class, 5)->create()->each(function ($user) {
            $user->posts()->save(
                factory(App\Post::class)->make(['user_id' => $user->id])
            );
        });



        $posts = App\Post::all();

        $posts->each( function($post) {
            factory(App\Reply::class, 5)->create(['post_id'=>$post->id]);
        });
    }
}
