<?php

namespace App\Lib;

use App\User;

class UserRepository
{

    public function all() {
        // $user = User::all(); // App\User::all() - from our database  - Eloquent
        // $user = U::findAll(  ); // RED BEAN PHP ORM 
        return User::all();
    }
}