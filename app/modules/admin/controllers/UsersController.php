<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Users as UsersModel;

class UsersController extends \BaseController{

	public function getShow(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());

		$users = UsersModel::all();

		return View::make('admin::user.list', array('users' => $users));
	}

	public function getModify($id = ''){
		$users = '';
		if($id != ''){
			$user = UsersModel::find($id);
		}
		return View::make('admin::user.form', array('users' => $users));
		// var_dump(\Input::all());die;
	}

	

}