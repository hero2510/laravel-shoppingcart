<?php

// FILTERS
Route::filter('csrf', function(){
	if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'PUT'){
		if(Session::token() != Input::get('_token')){
			throw new Illuminate\Session\TokenMismatchException;
		}
	}
});

// Home Section
Route::get('/admin', array('as' => 'home', 'uses' => 'App\Modules\Admin\Controllers\HomeController@index'));

// Users Section
Route::get('/admin/users', array('as' => 'users', 'uses' => 'App\Modules\Admin\Controllers\UsersController@show'));
// Route::get('/admin/users/edit/{id?}', function($id = ''){echo $id;die;});//array('as' => 'edit_user', 'uses' > 'App\Modules\Admin\Controllers\UsersController@edit'));
Route::get('/admin/users/edit/{id?}', array('as' => 'edit_user', 'uses' => 'App\Modules\Admin\Controllers\UsersController@edit'));

// Permission Section
/* Roles */
Route::get('/admin/permissions/roles', array('as' => 'roles', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@showRoles'));
Route::get('/admin/permissions/roles/modify/{id?}', array('as' => 'modify_role', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyRole'));
Route::post('/admin/permissions/roles/modify/{id?}', array('as' => 'modify_role.post', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyRole'));
// Route::get('/admin/users/edit/{id?}', function($id = ''){echo $id;die;});//array('as' => 'edit_user', 'uses' > 'App\Modules\Admin\Controllers\UsersController@edit'));
// Route::get('/admin/users/edit/{id?}', array('as' => 'edit_user', 'uses' => 'App\Modules\Admin\Controllers\UsersController@edit'));