<?php

use Illuminate\Database\Seeder;

class PostRepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create(['name'=>'Admin', 'email'=>'admin@laravel.test']);
        factory(App\User::class, 10)->create();
        factory(App\Post::class, 5)->create();
        factory(App\Reply::class, 5)->create();

        $users = App\User::all();



        foreach($users as $user) {
            $user->name = 'Test '.$user->name;
            $user->save();
        }
    }
}
