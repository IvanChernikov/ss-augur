<?php
/**
 * @noinspection PhpUndefinedClassInspection
 */


Auth::routes();

Route::get('/', 'NavigationController@index')->name('index');

Route::middleware('guest')->group(function () {
    Route::get('/landing', 'NavigationController@landing')->name('landing');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'NavigationController@dashboard')->name('dashboard');
    Route::get('/setting/list', 'NavigationController@settings')->name('setting.list');
    Route::get('/setting/edit/{universe}', 'EditorController@edit')->name('setting.edit');

    Route::resource('universe', 'Setting\UniverseController');
});