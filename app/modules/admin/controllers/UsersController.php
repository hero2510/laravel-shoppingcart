<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Users as UsersModel;

class UsersController extends \BaseController{

	public function showUsers(){
		// $users = \DB::select('SELECT * FROM person');
		$users = UsersModel::all();

		return View::make('admin::user.list', array('users' => $users));
	}

}