<?php

namespace App\Models\Specifications;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Material extends Model {
	use SoftDeletes;

	public function products (){
		return $this->hasMany('App\Models\Products\Product');
	}
}