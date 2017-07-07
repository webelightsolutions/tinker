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
use App\Product;
use Illuminate\Http\Request;



// Route::get('/', function () 
// {
//     return view('welcome',[
//     	'name' => 'Product'
//     	]);
// });




Route::get('/', function ()
{
    return view('welcome');


});


//Route::get('/product', 'ProductController@index');
//Route::post('/product', 'ProductController@store');
// 


//Route::get('auth/index', 'Auth\AuthController@get');


//};