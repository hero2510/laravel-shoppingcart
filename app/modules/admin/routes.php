<?php

Route::get('/admin/users', array('as' => 'users', 'uses' => 'App\Modules\Admin\Controllers\UsersController@showUsers'));
Route::get('/admin', array('as' => 'home', 'uses' => 'App\Modules\Admin\Controllers\HomeController@index'));