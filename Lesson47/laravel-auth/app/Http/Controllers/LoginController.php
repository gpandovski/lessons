<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class LoginController extends Controller
{
    public function show() {
        return view('mars.login.show');
    }

    public function authenticate() {
        // dd(request()->all());

        $validateData = request()->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($validateData)) {
            return redirect()->route('home');
        }
    }

    // protected by auth middleware
    public function logout() {
        // Session clearing
        // laravel auth logout
        // redirect
        Session::flush();
        Auth::logout();
        return back();
    }
}
