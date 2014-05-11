<?php
namespace App\Modules\Auth\Controllers;

use View;

class IndexController extends \BaseController{

	public function login(){
		return View::make('auth::index.login');
	}

}