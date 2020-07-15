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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts/create', 'ContactController@show') ;
Route::post('/contacts', 'ContactController@store');

Route::get('/email', function(){
    return new App\Mail\Contact();
}) ;

Route::get('/upload', 'UploadController@show') ;
Route::post('/upload', 'UploadController@store') ;

Route::get('/', function ( ) {
 
    // $example = app()->make(App\Example::class); // new Example();
    // $pdfGenerator = resolve('pdf-generator');

    // $container = new App\Container();

    // $container->bind('example', function(){
    //     return new App\Example();
    // });

    // $example = $container->resolve('example');

    // $example = resolve('example');

    ddd(resolve('example'), resolve('example'));

});

/**
 * 1) Laravel Service Container - convinient way of attaching Services or any other classes to string names
 * 2) Facades - Provide a static interface to framework underline componentes as View, File, Request etc. and give us convinient way to access their methods WITHOUT their dependencies
 * 3) Laravel Service Providers - a special classes where we can register our Classes to Laravel Service Container
 */

