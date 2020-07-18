<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function show() {
        return view('mars.register.show');
    }

    public function register() {
        // dd(request()->all());

        $validate = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        // User::create($validate);

        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password =  Hash::make( request('password'));
        $user->save();

        return redirect('/login');

    }
}
