<?php

use Illuminate\Support\Facades\Route;

//Route::get('/change/{locale}', 'LangController@changeLocale')->name('change.lang');
Route::group(['middleware' => 'lang', 'prefix' => '{lang}'], function () {
    Route::get('', 'LangController@setLang');
    Auth::routes();
    Route::get('', 'HomeController@index')->name('home');
    Route::prefix('blog')->group(function () {
        Route::get('/', 'BlogController@index')->name('blog.index');
        Route::get('/{id}', 'BlogController@show')->name('blog.post');
        Route::get('/category/{id}', 'BlogController@showByCategory')->name('blog.category');
    });

    Route::get('admin-panel/login', 'Admin\\AdminController@login')->name('admin.login');
    Route::get('admin-panel', 'Admin\\AdminController@index')->name('admin.dashboard');
    Route::group(['middleware' => ['role:Admin'], 'namespace' => 'Admin'], function () {
        Route::prefix('admin-panel')->group(function () {
            Route::resource('roles', 'RoleController');
            Route::resource('users', 'UserController');
            Route::resource('posts', 'PostController');
            Route::resource('categories', 'CategoryController');
            Route::resource('perms', 'PermissionController')->except(['edit', 'update']);
        });

    });

});
