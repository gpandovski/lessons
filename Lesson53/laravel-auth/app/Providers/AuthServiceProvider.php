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
            //Gate edit_forum
            // Gate::define('edit_forum', function($user){

            // });

            Gate::before(function($user, $ability){
                return $user->abilities()->contains($ability);
                // $abilities = $user->roles->map->abilities->flatten()->pluck('name');
                // foreach($abilities as $ab) {
                //     if($ab === $ability) {
                //         return true;
                //     }
                // }
             });
    
    }
}
