<?php

namespace App\Models\Calculations;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model 
{
	use SoftDeletes;

	public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}
}