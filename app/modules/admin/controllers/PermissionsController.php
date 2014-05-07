<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Roles as RolesModel;
	// App\Modules\Admin\Models\Roles as RolesModel,
	// App\Modules\Admin\Models\Roles as RolesModel;

class PermissionsController extends \BaseController{

	public function showRoles(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());

		$roles = RolesModel::all();

		return View::make('admin::role.list', array('roles' => $roles));
	}

	public function modifyRole($id = ''){
		$role = '';
		if($id != ''){
			$role = RolesModel::find($id);
		}
		return View::make('admin::role.form', array('role' => $role));
	}

	// public function edit($id = ''){
	// 	$user = UsersModel::find($id);
	// 	echo $user->username;die;
	// 	var_dump($user);die;
	// 	// var_dump(\Input::all());die;
	// }

}