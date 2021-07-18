<?php

namespace App\Models\Processes;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';
	use SoftDeletes;

	public function carts(){
		return $this->hasMany('App\Models\Processes\Cart');
	}

	public function user(){
		return $this->hasOne('App\User');
	}
}