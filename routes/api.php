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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'APIController@login');
Route::post('register', 'APIController@register');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::prefix("customers")->group(function () {
        Route::get('/', 'CustomerController@index')->name('customers.all');
        Route::get('/{customerId}', 'CustomerController@show')->name('customers.show');
        Route::post('/', 'CustomerController@store')->name('customers.store');
        Route::put('/{customerId}', 'CustomerController@update')->name('customers.update');
        Route::delete('/{customerId}', 'CustomerController@destroy')->name('customers.destroy');
    });
    Route::get('logout', 'APIController@logout');
    Route::get('users', 'UserController@index');
});
