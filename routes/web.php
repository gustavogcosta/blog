<?php

Auth::routes();

Route::get('/', function () { return redirect()->route('blog.index'); });

Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/blog/login', 'BlogController@formLogin')->name('blog.login');

Route::post('/blog/logout', 'BlogController@logout')->name('blog.logout');

Route::post('/blog/login/do', 'BlogController@login')->name('blog.login.do');

Route::get('/blog/register', 'BlogController@formRegister')->name('blog.register');

Route::post('/blog/register/do', 'BlogController@register')->name('blog.register.do');

Route::get('/blog/post', 'PostController@create')->name('post.create');

Route::post('/blog/post/store', 'PostController@store')->name('post.store');

Route::get('/blog/profile', 'BlogController@profile')->name('blog.profile');

Route::get('/blog/user/', 'BlogController@user')->name('blog.user');

Route::post('/blog/user/do', 'BlogController@userUpdate')->name('blog.user.do');