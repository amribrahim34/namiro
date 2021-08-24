<?php

namespace App\Models\Specifications;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Color extends Model {
	use SoftDeletes;
	protected $guarded = [];


	public function stocks (){
		return $this->hasMany('App\Models\Calculations\Stock');
	}
}