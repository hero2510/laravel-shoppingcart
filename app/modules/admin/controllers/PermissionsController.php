<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Roles as RolesModel,
	App\Modules\Admin\Models\Resources as ResourcesModel;
	// App\Modules\Admin\Models\Roles as RolesModel;

class PermissionsController extends \BaseController{

	/* ----- Roles ----- */
	public function showRoles(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());

		$roles = RolesModel::all();

		return View::make('admin::role.list', array('roles' => $roles));
	}

	public function modifyRole($id = ''){
		$rules = array(
			'name' => 'required|unique:roles,name,' . $id,
		);
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

			$validator = \Validator::make($data, $rules);
			if($validator->fails()){
				return View::make('admin::role.form', array('role' => $role, 'id' => $id, 'error_messages' => $validator->messages()->toArray()));
			}
			foreach($data as $field => $value){
				$role->{$field} = $value;
			}
			$role->save();

		}

		return View::make('admin::role.form', array('role' => $role, 'id' => $id));
	}

	/* ----- Resources ----- */
	public function showResources(){
		// $users = \DB::select('SELECT * FROM person');
		// $route = new \Route;
		// var_dump(get_class());

		$resources = ResourcesModel::all();

		return View::make('admin::resource.list', array('resources' => $resources));
	}

	public function modifyResource($id = ''){
		$rules = array(
			'name' => 'required|unique:roles,name,' . $id,
		);
		$resource = '';
		if($id != ''){
			$resource = ResourcesModel::find($id);
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
					$resource = new ResourcesModel;
				break;
				case 'edit':

				break;
			}

			$validator = \Validator::make($data, $rules);
			if($validator->fails()){
				return View::make('admin::resource.form', array('resource' => $role, 'id' => $id, 'error_messages' => $validator->messages()->toArray()));
			}
			foreach($data as $field => $value){
				$resource->{$field} = $value;
			}
			$resource->save();

		}

		return View::make('admin::resource.form', array('resource' => $resource, 'id' => $id));
	}

}