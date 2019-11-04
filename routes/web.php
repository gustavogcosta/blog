<?php

Route::get('/', function () { return view('welcome'); });

Route::get('/posts', 'PostController@index')
->name('posts.index');

Route::get('/posts/create', 'PostController@create')
->name('posts.create');

Route::put('/posts/update', 'PostController@update')
->name('posts.update');

Route::post('/posts/store', 'PostController@store')
->name('posts.store');

Route::delete('/posts/destroy/{post}', 'PostController@destroy')
->name('posts.destroy');

Route::get('/posts/{post}', 'PostController@show')
->name('posts.show');

Route::get('/posts/edit/{post}', 'PostController@edit')
->name('posts.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/blog/login', 'BlogController@formLogin')->name('blog.login');

Route::get('/blog/logout', 'BlogController@logout')->name('blog.logout');

Route::post('/blog/login/do', 'BlogController@login')->name('blog.login.do');