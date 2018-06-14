<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('', 'HomeController@index')->name('home');
Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::group(['middleware' => ['role:Admin']], function () {

    Route::namespace('Admin')->group(function () {
        Route::get('dashboard', 'AdminController@index')->name('dashboard');
        Route::resource('roles', 'RoleController');
        Route::resource('users', 'UserController');
        Route::resource('posts', 'PostController');
        Route::resource('perms', 'PermissionController')->except(['edit', 'update']);
    });
    //
});
