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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'HomeController@adminHome')->middleware('admin');

Route::resource('movies', 'MovieController')->middleware('admin');
Route::resource('screenings', 'ScreeningController');
Route::resource('reservations', 'ReservationController');


Route::get('screenings/create', 'ScreeningController@create')->middleware('admin');
