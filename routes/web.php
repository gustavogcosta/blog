<?php

Auth::routes();

Route::get('/', function () { return redirect()->route('blog.index'); });

Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/blog/home', 'PostController@index')->name('post.index')->middleware('auth');

Route::get('/blog/login', 'BlogController@formLogin')->name('blog.login');

Route::post('/blog/logout', 'BlogController@logout')->name('blog.logout');

Route::post('/blog/login/do', 'BlogController@login')->name('blog.login.do');

Route::get('/blog/register', 'UserController@create')->name('user.create');

Route::post('/blog/register/do', 'UserController@store')->name('user.store');

Route::get('/blog/post', 'PostController@create')->name('post.create')->middleware('auth');

Route::post('/blog/post/store', 'PostController@store')->name('post.store')->middleware('auth');

Route::get('/blog/profile', 'BlogController@profile')->name('blog.profile')->middleware('auth');

Route::get('/blog/profile/edit', 'UserController@edit')->name('user.edit')->middleware('auth');

Route::put('/blog/profile/edit', 'UserController@update')->name('user.update')->middleware('auth');

Route::get('/blog/profile/posts', 'PostController@show')->name('post.show')->middleware('auth');

Route::get('/blog/profile/posts/edit/{post}', 'PostController@edit')->name('post.edit')->middleware('auth');

Route::put('/blog/profile/posts/update/{post}', 'PostController@update')->name('post.update')->middleware('auth');

