<?php

// FILTERS
Route::filter('csrf', function(){
	if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'PUT'){
		if(Session::token() != Input::get('_token')){
			throw new Illuminate\Session\TokenMismatchException;
		}
	}
});

Route::group(array('prefix' => 'admin', 'before' => 'permission'), function(){
	// Home Section
	Route::get('/', array('as' => 'home', 'uses' => 'App\Modules\Admin\Controllers\HomeController@index'));

	// Users Section
	Route::controller('users', 'App\Modules\Admin\Controllers\UsersController', ['getShow' => 'users.show', 'getModify' => 'users.modify']);
	// Route::get('/admin/users', array('as' => 'users', 'uses' => 'App\Modules\Admin\Controllers\UsersController@show'));
	// // Route::get('/admin/users/edit/{id?}', function($id = ''){echo $id;die;});//array('as' => 'edit_user', 'uses' > 'App\Modules\Admin\Controllers\UsersController@edit'));
	// Route::get('/admin/users/edit/{id?}', array('as' => 'edit_user', 'uses' => 'App\Modules\Admin\Controllers\UsersController@edit'));

	// Permission Section
		/* Roles */
	Route::group(array('prefix' => 'permissions'), function(){
		Route::get('roles', array('as' => 'roles', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@showRoles'));
		Route::get('roles/modify/{id?}', array('as' => 'modify_role', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyRole'));
		Route::post('roles/modify/{id?}', array('as' => 'modify_role.post', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyRole'));
		Route::get('roles/delete/{id?}', array('as' => 'delete_role', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@deleteRole'));
		Route::get('roles/grant-access/{id?}', array('as' => 'grant_access_for_role', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@grantAccessForRole'));

			/* Resources */
		Route::get('resources', array('as' => 'resources', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@showResources'));
		Route::get('resources/modify/{id?}', array('as' => 'modify_resource', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyResource'));
		Route::post('resources/modify/{id?}', array('as' => 'modify_resource.post', 'uses' => 'App\Modules\Admin\Controllers\PermissionsController@modifyResource'));
		// Route::get('/admin/users/edit/{id?}', function($id = ''){echo $id;die;});//array('as' => 'edit_user', 'uses' > 'App\Modules\Admin\Controllers\UsersController@edit'));
		// Route::get('/admin/users/edit/{id?}', array('as' => 'edit_user', 'uses' => 'App\Modules\Admin\Controllers\UsersController@edit'));
	});
});