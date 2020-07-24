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

// Route::get('/test', function () {
//     // contracts
//     // dd(app('Illuminate\Contracts\Config\Repository'));
//     // dd(Config::get('database.default'));
//     // contract
//     // dd(app('Illuminate\Contracts\Config\Repository')['database']['default']);

//     // implementacija
//     // dd(app('Illuminate\Config\Repository')['database']['default']);

//     // dd(app('config')['database']['default']);
//     // dd(app()['config']['database']['default']);

//     // dd(app('Illuminate\Config\Repository'));
// });

Route::get('/test', 'HomeController@index');