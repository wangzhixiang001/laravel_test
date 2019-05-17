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

Route::get('unsubscribe', function () {
    return view('welcome');
})->name('unsubscribe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//cache
Route::group(['prefix' => 'cache','namespace'=>'Cache'], function () {
    Route::get('lock', 'CacheTestcontroller@lock');

});
