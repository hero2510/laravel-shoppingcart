<?php
namespace App\Modules\Admin\Models;

class Roles extends \Eloquent{

	protected $table;
	protected $timestamp = false;

	public function __construct(){
		parent::__construct();
		$this->table = \DB::getTablePrefix() . 'roles';
	}

}