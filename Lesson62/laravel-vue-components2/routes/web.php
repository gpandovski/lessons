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
    // return view('learn-vue-components');
    return view('test-events');
    // return view('learn-vue');
});

Route::get('/pricing-plans', function(){
    return view('pricing-plans');
});

Route::get('/slots', function(){
    return view('slots');
});

Route::get('/component', function(){
    return view('component');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post?}', 'PostsController@show')->name('post');
Route::post('/like/{id}', 'LikesController@store');




