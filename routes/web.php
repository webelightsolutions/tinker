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
use App\Customers;
use Illuminate\Http\Request;



// Route::get('customer/', function () 
// {
//     return view('customer.create');
// });

Route::get('customer/', 'CustomersController@index');
Route::get('customer/create', 'CustomersController@create');
Route::post('customer/', 'CustomersController@store');
Route::get('customer/{id}/edit', 'CustomersController@edit');
Route::put('customer/{id}', 'CustomersController@update');
Route::get('customer/{id}/show', 'CustomersController@show');
Route::delete('customer/{id}', 'CustomersController@destroy');






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

// Route::get('/', function () {
//     return view('welcome');

// });
