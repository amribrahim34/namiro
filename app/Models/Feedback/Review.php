<?php

namespace App\Models\Feedback;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model {
	
	use SoftDeletes;

	public function product (){
		return $this->belongsTo('App\Models\Products\Product');
	}

	public function user (){
		return $this->belongsTo('App\User');
	}
}