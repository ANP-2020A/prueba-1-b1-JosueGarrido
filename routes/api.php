<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::get('customers/{customers}', 'CustomersController@show');
    Route::post('customers', 'CustomersController@store');
    Route::put('customers/{customers}', 'CustomersController@update');
    Route::delete('customers/{customers}', 'CustomersController@delete');
    Route::get('products/{products}', 'ProductsController@show');
    Route::post('products', 'ProductsController@store');
    Route::put('products/{products}', 'ProductsController@update');
    Route::delete('products/{products}', 'ProductsController@delete');

});
