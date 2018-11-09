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

Route::get('/', function () {
    return view('welcome');
});
Route::name('auth.')->group(function () {
	Auth::routes();
});

Route::get('/home', 'HomeController@index')->name('home');

Route::name('world.')->prefix('world')->group(function() {
	Route::get('', 'World\NavigationController@index')->name('index');
	Route::get('edit', 'World\NavigationController@edit')->name('edit');
});