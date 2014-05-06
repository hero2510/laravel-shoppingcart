<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Users as UsersModel;

class UsersController extends \BaseController{

	public function show(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());

		$users = UsersModel::all();

		return View::make('admin::user.list', array('users' => $users));
	}

	public function edit($id = ''){
		$user = UsersModel::find($id);
		echo $user->username;die;
		var_dump($user);die;
		// var_dump(\Input::all());die;
	}

}