<?php
namespace App\Modules\Auth\Controllers;

use View;

class IndexController extends \BaseController{

	public function login(){
		if(\Request::isMethod('post')){
			$data = \Input::all();
			if(\Auth::attempt(array('username' => $data['username'], 'password' => $data['password'], 'status' => 1))){
				
			}
		}
		return View::make('auth::index.login');
	}

}