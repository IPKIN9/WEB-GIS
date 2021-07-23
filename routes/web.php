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

Route::get('/', 'Web\WebController@index')->name('home.index');
Route::prefix('maps/')->group(function () {
    Route::get('index', 'Web\MapsController@index')->name('maps.index');
});
Route::get('/profile', 'Web\ProfileController@index')->name('profile.index');
