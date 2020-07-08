<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
 

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

// GET login LoginController@show - show login form
Route::get('/login', 'LoginController@show')->name('login');
// GET register RegisterController@show
Route::get('/register', 'RegisterController@show')->name('register');

// POST login LoginController@authenticate
Route::post('/login', 'LoginController@authenticate');
// POST register RegisterController@register
Route::post('/register', 'RegisterController@register');
// GET home HomeController@index

// POST logout LoginController@logout
Route::post('/logout', 'RegisterController@logout')->middleware('auth')->name('logout');
// Forget password functionality

/**
 * 1. Click "Forget password" button
 * 2. Fill email in form
 * 3. Prepare a unique token and associate it with the user account
 * 4. Send an email with a unique link back to our server that confirms email ownership
 * 5. Link back to website, confirm the tocken and set new password
 */

/**
 * Laravel Authentication
 * 
 * Create new laravel project
 * (Homestead Clean laravel folder -> vagrant ssh -> cd laravel ) 
 * composer create-project --prefer-dist laravel/laravel .
 * composer require laravel/ui --dev
 * php artisan ui vue --auth
 * npm install && npm run dev
 * php artisan migrate 
 */

/**
 * Custom Laravel Authentication
 * 
 * Create new laravel project
 * composer create-project --prefer-dist laravel/laravel .
 * composer require laravel/ui --dev
 * php artisan ui vue
 * php artisan ui bootstrap
 * npm install && npm run dev
 * php artisan migrate 
 * 
 */