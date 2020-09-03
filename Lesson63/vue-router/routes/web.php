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

Route::get('/{any?}', function () {
    // return view('welcome'); // SINGLE PAGE view ( Lesson explantions with examples)
    return view('index'); // Lesson Practice application
});
//================================================================
// ONLY FOR DYNAMIC ROUTES ( TEMPORARY SOLUTION)
//================================================================
// Route::get('/user/{any?}', function () {
//     return view('welcome'); // ONLY FOR DYNAMIC ROUTES ( TEMPORARY SOLUTION)
// });
//================================================================
// Single page application we always have a single route to load our application

// SPA (single page application) a web app which loads from single page index.blade.php / index.html ( separate Vue frontend )
// app dynamically updates the user interface within the app
