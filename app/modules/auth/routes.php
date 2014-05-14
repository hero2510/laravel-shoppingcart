<?php

Route::get('/auth/login', array('as' => 'login', 'uses' => 'App\Modules\Auth\Controllers\IndexController@login'));
Route::post('/auth/login', array('as' => 'login.post', 'uses' => 'App\Modules\Auth\Controllers\IndexController@login'));
