<?php

use Illuminate\Support\Facades\Route;


Route::resource('posts', 'PostsController');

Route::resource('photos', 'PhotosController');

Route::resource('users', 'UserController');