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

// Events route
Route::get('/event', function() {
    $user = new App\User();
    event(new App\Events\UserWasBanned($user));
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

Route::get('/users', function() {

    $users = (new App\Lib\UserRepository())->all();

    ddd($users);
 
});

Route::get('/products', function() {

    // $products = Product::all();

    // repositories not always fetch data from database, they can provide data from different sources
    $productRepository = new App\Repositories\ProductRepository();

    $products = $productRepository->getAll();

    return view('products.index', ['products'=>$products]);

    dd($products);
});



