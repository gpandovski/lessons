<?php

use Illuminate\Support\Facades\Route;
use App\Article;
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

Route::get('/about', function () {

    $articles = Article::take(3)->latest()->get(); // => "SELECT * FROM articles ORDER BY id DESC LIMIT 2"

    return view('about', ['articles'=>$articles]);
});
 

// Articles
// read
Route::get('/articles/{article}', 'ArticlesController@show'); // 1  resourse (article)
// read
Route::get('/articles', 'ArticlesController@index'); // list of resourses (lista na articles)
// CRUD
//create
Route::get('/articles/create', 'ArticlesController@create');


//users/{user}
// users
//users/create

// 7 RESTFULL action

// index - lists all resourses
// show - show single resourse
// create - show form for creating resourse
// store - save resourse to database 
// edit - show form to edit resourse 
// update - update resourse
// destroy - delete resourse

// Projects - php artisan make:controller ProjectsController -r 
// php artisan help make:controller

// route : "/prejects"