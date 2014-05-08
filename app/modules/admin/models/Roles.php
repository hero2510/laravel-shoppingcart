<?php
namespace App\Modules\Admin\Models;

class Roles extends \Eloquent{

	protected $table;
	public $timestamps = false;

	public function __construct(){
		parent::__construct();
		$this->table = \DB::getTablePrefix() . 'roles';
	}

	public function parent(){
		return $this->belongsTo(new Roles, 'parent');
	}

	public function children(){
		return $this->hasMany(new Roles, 'parent');
	}

}