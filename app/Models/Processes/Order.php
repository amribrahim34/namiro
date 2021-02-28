<?php

namespace Orders;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {

	protected $table = 'orders';
	use SoftDeletes;

	public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}

	public function user(){
		return $this->hasOne('App\User');
	}
}