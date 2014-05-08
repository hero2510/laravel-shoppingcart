<?php
namespace App\Modules\Admin\Models;

class Resources extends \Eloquent{

	protected $table;
	public $timestamps = false;

	public function __construct(){
		parent::__construct();
		$this->table = \DB::getTablePrefix() . 'resources';
	}

	public function parent(){
		return $this->belongsTo(new Resources, 'parent');
	}

	public function children(){
		return $this->hasMany(new Resources, 'parent');
	}

}