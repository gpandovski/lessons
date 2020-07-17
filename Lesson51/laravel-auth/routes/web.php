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
 

Auth::routes();
 

Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/posts', 'PostsController@index'); // show all routes
Route::get('/posts/{post}', 'PostsController@show'); // route model binding

Route::post('/best-replies/{reply}', 'PostBestReplyController@store');

// For any post the autor may choose any reply as a best replay;
// We need authorization so we can protect any user to make answer the best