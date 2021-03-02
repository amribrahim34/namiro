<?php

namespace Wishes;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model {

	protected $table = 'wishes';
	use SoftDeletes;

	public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}

	public function user(){
		return $this->hasOne('App\User');
	}
}