<?php
/**
 * @noinspection PhpUndefinedClassInspection
 */


Auth::routes();

Route::middleware('guest')->get('/', 'HomeController@landing')->name('landing');
Route::middleware('auth')->get('/', 'HomeController@index')->name('home');

Route::get('/setting/list', 'HomeController@settings')->name('setting.list');
Route::get('/setting/edit/{universe}', 'EditorController@edit')->name('setting.edit');

Route::middleware('auth')->group(function () {
    Route::resource('universe', 'Setting\UniverseController');
});