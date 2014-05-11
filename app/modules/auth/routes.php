<?php

Route::get('/auth/login', array('as' => 'login', 'uses' => 'App\Modules\Auth\Controllers\IndexController@login'));
