<?php

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



// Route::get('customer/', function () 
// {
//     return view('customer.create');
// });

Route::get('customer/', '\App\Http\Controllers\CustomersController@index');
Route::get('customer/create', '\App\Http\Controllers\CustomersController@create');
Route::post('customer/', '\App\Http\Controllers\CustomersController@store');
Route::get('customer/{id}/edit', '\App\Http\Controllers\CustomersController@edit');
Route::put('customer/{id}', '\App\Http\Controllers\CustomersController@update');
Route::get('customer/{id}/show', '\App\Http\Controllers\CustomersController@show');
Route::delete('customer/{id}', '\App\Http\Controllers\CustomersController@destroy');






//Route::get('auth/index', 'Auth\AuthController@get');


//};


Route::get('product', '\App\Http\Controllers\ProductsController@index');
Route::get('product/create', '\App\Http\Controllers\ProductsController@create'); 
Route::get('product/{edit}/edit', '\App\Http\Controllers\ProductsController@edit'); 
Route::post('product/store', '\App\Http\Controllers\ProductsController@store'); 
Route::delete('product/{products}', '\App\Http\Controllers\ProductsController@destroy');
Route::put('product/{id}', '\App\Http\Controllers\ProductsController@update'); 
Route::get('product/{id}/show', '\App\Http\Controllers\ProductsController@show');



 // Route::get('{id}', 'ProductController@show');
 // Route::post('{id}', 'ProductController@show');

// Route::get('/test', function () {
//     return view('welcome');
// });
<<<<<<< HEAD


//CustomerAddressesController Routes List

=======
Route::get('/test','\App\Http\Controllers\OrdersController@index');
>>>>>>> 213d858e4228a1937b7a9ed7670b2da803e1bea8
