<?php
namespace App\Modules\Admin\Controllers;

use View,
	App\Modules\Admin\Models\Roles as RolesModel,
	App\Modules\Admin\Models\Resources as ResourcesModel;

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
			$role = RolesModel::findOrFail($id);			
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

			try{
				foreach($data as $field => $value){
					$role->{$field} = $value;
				}
				$role->save();
				return \Redirect::route('roles')->with('success', '<strong>Success! </strong>Your action is done.');
			}catch(\Exception $e){
				echo $e->getMessage();
			}

		}

		return View::make('admin::role.form', array('role' => $role, 'id' => $id));
	}

	public function deleteRole($id = ''){
		try{
			$role = RolesModel::find($id);
			$role->delete();
			return \Redirect::route('roles')->with('success', '<strong>Success! </strong>Your action is finished.');
		}catch(\Exception $e){
			return \Redirect::route('roles')->with('fail', '<strong>Fail! </strong>Something went wrong.');
		}
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
			'name' => 'required|unique:resources,name,' . $id,
		);
		$resources = ResourcesModel::where('parent', null)->get()->toArray();
		$modules[] = 'Choose Module';
		
		foreach($resources as $item){
			$modules[$item['id']] = $item['name'];
		}
		unset($resources);

		$resource = '';
		if($id != ''){
			$resource = ResourcesModel::findOrFail($id);
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

			if($data['parent'] == 0){
				unset($data['parent']);
			}

			$validator = \Validator::make($data, $rules);
			if($validator->fails()){
				return View::make('admin::resource.form', array('resource' => $resource, 'id' => $id, 'modules' => $modules, 'error_messages' => $validator->messages()->toArray()));
			}
			foreach($data as $field => $value){
				$resource->{$field} = $value;
			}
			$resource->save();

		}

		return View::make('admin::resource.form', array('resource' => $resource, 'id' => $id, 'modules' => $modules));
	}

}