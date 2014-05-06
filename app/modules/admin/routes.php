<?php

Route::get('/admin/users', array('as' => 'users', 'uses' => 'App\Modules\Admin\Controllers\UsersController@show'));
Route::get('/admin', array('as' => 'home', 'uses' => 'App\Modules\Admin\Controllers\HomeController@index'));
Route::get('/admin/users/edit/{id?}', function($id = ''){echo $id;die;});//array('as' => 'edit_user', 'uses' > 'App\Modules\Admin\Controllers\UsersController@edit'));
Route::get('/admin/users/edit/{id?}', array('as' => 'edit_user', 'uses' => 'App\Modules\Admin\Controllers\UsersController@edit'));