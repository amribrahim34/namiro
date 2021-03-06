<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

	protected $table = 'carts';
	use SoftDeletes;

	public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}

	public function user(){
		return $this->hasOne('App\User');
	}
}