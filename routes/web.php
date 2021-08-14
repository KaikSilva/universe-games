<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => 'web', 'namespace' => 'Web', 'as' => 'web.'], function () {

    Route::get('/' , 'WebController@home')->name('home');
    Route::get('/blog' , 'WebController@blog')->name('blog');

});




/** ADMIN */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    /** EXTERNO */
    Route::get('/' , 'AuthController@showLoginForm')->name('login');
    Route::post('/login' , 'AuthController@login')->name('login.do');
    Route::get('logout', 'AuthController@logout')->name('logout');


    /** PROTEGIDOS */
    Route::group(['middleware' => ['auth']], function () {

        /** POST */
        Route::get('/post', 'PostController@AllPost');
        Route::get('/post/novo', 'PostController@ShowPostForm')->name('add.post');
        Route::post('/post/novo/insert', 'PostController@AddPost')->name('add.post.do');
        Route::get('/post/todos', 'PostController@AllPost')->name('all.post');
        Route::get('/post/editar/{post}', 'PostController@EditPost')->name('edit.post');
        Route::get('/post/editar/{post}/save', 'PostController@SavePost')->name('edit.post.save');

        /** HOME */
        Route::get('/home' , 'AuthController@showHome')->name('home');

        /** COLABORADORES */
        Route::resource('user', 'UserController');

        /** ACL - ROLES */
        Route::get('role/{role}/permissions' , 'roleController@permissions')->name('role.permissions');
        Route::post('role/{role}/permissions/sync' , 'roleController@permissionsSync')->name('role.permissionSync');
        Route::resource('role', 'roleController');

        /** ACL - PERMISSIONS */
        Route::resource('permission', 'PermissionController');

    });
});
