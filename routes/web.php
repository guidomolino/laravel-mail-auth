<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'GuestController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');

Route::get('/posts/{id}', 'PostController@show')->name('post.show');

Route::get('/posts/delete/{id}', 'LoggedController@delete')->name('post.delete');
