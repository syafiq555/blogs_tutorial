<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/**
 * Boleh plih either 2
 */
// Route::group([
//     'prefix' => 'blogs',
//     'as' => 'blogs.',
// ], function() {
//     Route::get('/', 'BlogController@index')->name('index');
//     Route::get('/create', 'BlogController@create')->name('create');
//     Route::get('/{blog}/edit', 'BlogController@edit')->name('edit');
//     Route::delete('/{blog}', 'BlogController@destroy')->name('destroy');
//     Route::put('/{blog}', 'BlogController@update')->name('update');
//     Route::get('/{blog}', 'BlogController@show')->name('show');
//     Route::post('/', 'BlogController@store')->name('store');
// });
Route::resource('/blogs', 'BlogController');