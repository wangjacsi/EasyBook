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
use Illuminate\Http\Request;







Route::get('/', function () {
    return view('index');
});

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Developer
Route::get('/developer', 'DeveloperController@index');

// Reservation
Route::prefix('reservation')->group(function () {
    Route::post('/store', 'ReservationController@store');
    Route::get('/', 'ReservationController@index')->name('reservation');
    // post -> return client information
    Route::get('/{client_id}/{member_id}/{month}', 'ReservationController@show');
});
