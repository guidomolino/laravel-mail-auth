<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'GuestController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');

Route::get('/post/{id}', 'PostController@show')->name('post.show');

Route::get('/post/delete/{id}', 'LoggedController@delete')->name('post.delete');

Route::get('/post/edit/{id}', 'LoggedController@edit')->name('post.edit');

Route::post('/post/update/{id}', 'LoggedController@update')->name('post.update');
