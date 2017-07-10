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