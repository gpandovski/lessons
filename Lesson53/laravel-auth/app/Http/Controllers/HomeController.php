<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
    * Middleware provide a convenient mechanism for filtering HTTP requests entering your application. 
    * For example, Laravel includes a middleware that verifies the user of your application is authenticated. 
    * If the user is not authenticated, the middleware will redirect the user to the login screen. 
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Auth::user() return null if user is not logged in
        return view('home');
    }
}
