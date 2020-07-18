<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
 

    // Auth hooks - before, after

    // public function before(User $user) {
    //     // is admin? is user moderator
    //     if ($user->id === 1) {
    //         return true; // when  we return true 
    //     }
    //    // return $user->id === 1; // false 
    // }
    // public function after() {
    // }

    public function view(User $user, Post $post)
    {
        return $post->user->is($user);
    }
    
    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(User $user, Post $post) // ? -  $user or null 
    {
        return $post->user->is($user);
    }
     
}
