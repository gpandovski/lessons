<?php

namespace App\Lib;

use App\User as UserModel;

class User 
{

    public function all() {
        // $user = UserModel::all(); // App\User::all() - from our database  - Eloquent
        $user = U::findAll(  ); // RED BEAN PHP ORM 
        return $user;
    }
}