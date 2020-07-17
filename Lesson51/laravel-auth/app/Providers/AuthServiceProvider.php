<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;
use App\Post;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-post', function(User $user, Post $post) { // $user is logged in user, $post comming from @can blade directive
        //     // return true;
        //     //  $post->user - return user model - Model has is() functions
        //     // $post->user_id === $user->id
        //     return $post->user->is($user); // laravel way 
        // });
    }
}
