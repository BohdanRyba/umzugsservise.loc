<?php

use Illuminate\Support\Facades\Route;

Route::get('language/{lang}', 'LangController@change')->name('language');

Auth::routes();

Route::get('', 'HomeController@index')->name('home');
Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('/post/{id}', 'BlogController@show')->name('blog.post');
    Route::get('/{alias}', 'BlogController@index')->name('blog.category');
});

Route::get('admin-panel', 'Admin\\AdminController@index')->name('admin.dashboard');
Route::get('admin-panel/login', 'Admin\\AdminController@login')->name('admin.login');
Route::group(['middleware' => ['role:Admin'], 'namespace' => 'Admin'], function () {
    Route::prefix('admin-panel')->group(function () {
        Route::resource('roles', 'RoleController');
        Route::resource('users', 'UserController');
        Route::resource('posts', 'PostController');
        Route::resource('categories', 'CategoryController');
        Route::resource('perms', 'PermissionController')->except(['edit', 'update']);
    });

});
