<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs', 'BlogController@index')->name('blogs.index');
Route::get('/blogs/create', 'BlogController@create')->name('blogs.create');
Route::get('/blogs/{blog}/edit', 'BlogController@edit')->name('blogs.edit');
Route::delete('/blogs/{blog}', 'BlogController@destroy')->name('blogs.destroy');
Route::put('/blogs/{blog}', 'BlogController@update')->name('blogs.update');
Route::get('/blogs/{blog}', 'BlogController@show')->name('blogs.show');
Route::post('/blogs', 'BlogController@store')->name('blogs.store');
