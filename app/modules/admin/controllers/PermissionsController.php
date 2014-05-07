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

		if(\Request::isMethod('post')){
			$data = \Input::all();
			unset($data['ok']);
			unset($data['_token']);
			
			$type = 'add';
			if($data['id'] != ''){
				$type = 'edit';
			}

			switch($type){
				case 'add':
					unset($data['id']);
					$role = new RolesModel;
				break;
				case 'edit':

				break;
			}

			foreach($data as $field => $value){
				$role->{$field} = $value;
			}
			$role->save();

		}

		return View::make('admin::role.form', array('role' => $role, 'id' => $id));
	}

	// public function edit($id = ''){
	// 	$user = UsersModel::find($id);
	// 	echo $user->username;die;
	// 	var_dump($user);die;
	// 	// var_dump(\Input::all());die;
	// }

}