<?php
namespace App\Modules\Admin\Models;

// use App\Modules\Admin\Models\Roles as Roles;

class Users extends \Eloquent{

	protected $table;
	// protected $timestamp = false;

	public function __construct(){
		parent::__construct();
		$this->table = \DB::getTablePrefix() . 'users';
	}

	public function role(){
		return $this->belongsTo(new Roles, 'role');
	}

}