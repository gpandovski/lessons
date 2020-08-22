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

Route::get('json', function(){

    $jsonRspv = [
        "firstname"=> "John",
        "lastname"=>"Doe"
    ];
    
    return response()->json($jsonRspv);

    // return App\Post::all();
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('posts', function () {
    return view('posts', ['posts'=> App\Post::paginate(5)]);
});

Route::get('posts/search', 'PostsSearchController@index');

Route::get('comments', function () {
    return view('comments', ['comments'=> App\Comment::paginate(5)]);
});
Route::get('comments/search', 'PostsFullTextSearchController@index');


Route::get('test', function () {

    //true & false;
    $roles = App\Role::all(); 

    // foreach($roles as $role) {
    //     $role->is_active = ($role->is_active ===1) ? true : false;
    // }
    return App\Role::whereIn('id', [1,2,8])->get();
    // ddd(App\Role::first()->assignd_on); // created_at, updated_at - Carbon instance
});