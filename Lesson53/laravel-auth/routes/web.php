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

// signle route

// we can protect multiple routes

Route::middleware('can:accessAdmin')->group(function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    // Route::get('/admin', 'AdminController@index')->name('admin');
    // Route::get('/profile', 'ProfileController@index')->name('profile');
});

// 'accessDashboard'
// 'accessAdminpanel'
// 'accessProfile'

Route::get('/posts', 'PostsController@index'); // show all routes
// middleware 'can'
Route::get('/posts/{post}', 'PostsController@show')->middleware('can:view,post'); // route model binding

Route::post('/best-replies/{reply}', 'PostBestReplyController@store');

// For any post the autor may choose any reply as a best replay;
// We need authorization so we can protect any user to make answer the best


Route::get('/reports', function(){
    return "Some reports that can view Manager with Ability view_reports";
})->middleware('can:view_reports');