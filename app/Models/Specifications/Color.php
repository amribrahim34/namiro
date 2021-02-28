<?php

namespace App\Models\Specifications;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model {
	use SoftDeletes;

	public function products (){
		return $this->hasMany('App\Models\Products\Product');
	}
}