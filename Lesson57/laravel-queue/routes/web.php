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

    // 1) sync - writes directly to log file
    // 2) QUEUE_CONNECTION=redis - async

    // non blocking
 
    // dispatch(function(){
    //     // ?? wwaat
    //     logger("Hello there"); // JOB  = code inside dispatch
    // });
    dispatch(new App\Jobs\ReconcilAccount(App\User::first()));
    // ->delay(now()->addMinutes(2));
    
    // some code here
    return "Finished";
});
