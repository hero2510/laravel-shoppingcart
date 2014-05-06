<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Users as UsersModel;

class UsersController extends \BaseController{

	public function showUsers(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());
		$users = UsersModel::all();

		return View::make('admin::user.list', array('users' => $users));
	}

}