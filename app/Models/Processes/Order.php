<?php

namespace App\Models\Processes;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

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