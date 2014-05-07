<?php
namespace App\Modules\Admin\Models;

class Users extends \Eloquent{

	protected $table;
	protected $timestamp = false;

	public function __construct(){
		parent::__construct();
		$this->table = \DB::getTablePrefix() . 'users';
	}

}