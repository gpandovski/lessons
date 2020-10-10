<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// in API we dont have Controller actions create and edit



Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login')->name('login');
Route::get('logout', 'AuthController@logout');
 
// Route::apiResource('users', 'UsersController');
Route::apiResource('users', 'UsersController')->middleware(['auth:api']);
Route::apiResource('events', 'EventController')->middleware(['auth:api']);
Route::get('dashboard', 'EventController@index');
// Protected
// Route::get('dashboard', 'EventController@index')->middleware(['auth:api']);

// Route::group([
//     'prefix' => 'auth'
// ], function () {
//     Route::post('login', 'AuthController@login');
//     Route::post('register', 'AuthController@register');

//     Route::group([
//         'middleware' => 'auth:api'
//     ], function() {
//         Route::get('logout', 'AuthController@logout');

//         Route::apiResource('users', 'UsersController');
//     });
// });