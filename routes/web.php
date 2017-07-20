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

Route::middleware('auth')->get('/reservations2', 'ReservationController@index');

Route::post('/reservation/store', 'ReservationController@store');//middleware('auth')->
Route::get('reservation', 'ReservationController@index')->name('reservation');
