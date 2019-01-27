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

// Views

Route::get('contact', 'PagesController@getContact');

Route::post('contact', 'PagesController@postContact');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('account', 'PagesController@getAccount');

// Blog

Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');

Route::get('blog','BlogController@getIndex')->name('blog.index');

// Manage 

Route::prefix('manage')->middleware('role:superadministrator')->group(function () {

    Route::get('/', 'ManageController@index');

    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');

    // Users
    Route::resource('/users', 'UserController');

    //Permissions
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);

    // Roles
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);

    // Posts
    Route::resource('/posts', 'PostController');

    // Categories
	Route::resource('/categories', 'CategoryController', ['except' => ['create']]);

	// Tags
	Route::resource('/tags', 'TagController', ['except' => ['create']]);

	// Comments  
	Route::post('/commnets/{post_id}', ['uses' => 'CommentsController@store', 'as' => 'comments.store']);	

	Route::get('/comments/{id}/edit', ['uses' => 'CommentsController@edit', 'as' => 'comments.edit']);

	Route::put('/comments/{id}', ['uses' => 'CommentsController@update', 'as' => 'comments.update']);

	Route::delete('/comments/{id}', ['uses' => 'CommentsController@destroy', 'as' => 'comments.destroy']);

	Route::get('/comment/{id}/delete', ['uses' => 'CommentsController@delete', 'as' => 'comments.delete']);
    
});

// Auth

Auth::routes(['verify' => true]);

