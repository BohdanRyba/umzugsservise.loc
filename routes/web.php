<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('', 'HomeController@index')->name('home');
Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::group(['middleware' => ['role:Admin']], function () {
    Route::namespace('Admin')->group(function () {
        Route::get('admin-panel', 'AdminController@index')->name('admin.dashboard');
        Route::prefix('admin-panel')->group(function () {
            Route::resource('roles', 'RoleController');
            Route::resource('users', 'UserController');
            Route::resource('posts', 'PostController');
            Route::resource('categories', 'CategoryController');
            Route::resource('perms', 'PermissionController')->except(['edit', 'update']);
        });
    });
});
