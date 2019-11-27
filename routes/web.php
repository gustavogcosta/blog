<?php

Auth::routes();

Route::redirect('/', './blog/home');

Route::prefix('blog')->group(function() {
   Route::get('/home', 'PostController@index')->name('blog.home')->middleware('auth');
   Route::get('/write', 'PostController@create')->name('post.write')->middleware('auth');
   Route::post('/post/store', 'PostController@store')->name('post.store')->middleware('auth');
   Route::get('/posts', 'PostController@show')->name('post.show')->middleware('auth');
   Route::get('/posts/edit/{post}', 'PostController@edit')->name('post.edit')->middleware('auth');
   Route::put('/posts/update/{post}', 'PostController@update')->name('post.update')->middleware('auth');
   Route::delete('/posts/destroy/{post}', 'PostController@destroy')->name('post.destroy')->middleware('auth');
   Route::get('/login', 'BlogController@formLogin')->name('blog.login');
   Route::post('/login/do', 'BlogController@login')->name('blog.login.do');
   Route::post('/logout', 'BlogController@logout')->name('blog.logout')->middleware('auth');
   Route::get('/register', 'UserController@create')->name('user.create');
   Route::post('/register/do', 'UserController@store')->name('user.store');
   Route::get('/user', 'UserController@edit')->name('user.edit')->middleware('auth');
   Route::put('/user/update', 'UserController@update')->name('user.update')->middleware('auth'); 
});
