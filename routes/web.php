<?php

use Illuminate\Support\Facades\Route;


Route::resource('posts', 'PostsController');

Route::resource('users', 'UserController');