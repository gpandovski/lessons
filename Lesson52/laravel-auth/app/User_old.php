<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
        return $this->hasMany(Post::class); 
    }


    // public function setPasswordAttribute($password) {
    //     $this->attributes['password'] = Hash::make($password);
    // }

    // $user->email = ""

    // public function setEmailAttribute($email)

    // $user->role('admin')
    // this funciton will decide if user has correct role
    public function role($role) { // $role
        $role = (array) $role; // from string we create array
        return in_array($this->role, $role); // we check if array $role has $this->role string inside
    }

    // public function getUserRole() 
    // {
    //     return $this->role;
    // }
}
