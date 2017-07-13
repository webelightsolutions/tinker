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
Route::get('product/{id}/', '\App\Http\Controllers\ProductsController@show');



 // Route::get('{id}', 'ProductController@show');
 // Route::post('{id}', 'ProductController@show');

// Route::get('/test', function () {
//     return view('welcome');
// });
Route::get('/test','\App\Http\Controllers\OrdersController@index');

// Type route
Route::get('type', '\App\Http\Controllers\TypesController@index');
Route::get('type/{edit}/edit', '\App\Http\Controllers\TypesController@edit'); 
Route::post('type', '\App\Http\Controllers\TypesController@store'); 
Route::delete('type/{id}', '\App\Http\Controllers\TypesController@destroy');
Route::put('type/{id}', '\App\Http\Controllers\TypesController@update'); 
Route::get('type/{id}/', '\App\Http\Controllers\TypesController@show');

// Lookup route
Route::get('lookup', '\App\Http\Controllers\LookupsController@index');
Route::get('lookup/{edit}/edit', '\App\Http\Controllers\LookupsController@edit'); 
Route::post('lookup', '\App\Http\Controllers\LookupsController@store'); 
Route::delete('lookup/{id}', '\App\Http\Controllers\LookupsController@destroy');
Route::put('lookup/{id}', '\App\Http\Controllers\LookupsController@update'); 
Route::get('lookup/{id}/', '\App\Http\Controllers\LookupsController@show');
