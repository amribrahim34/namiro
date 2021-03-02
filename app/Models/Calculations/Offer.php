<?php

namespace App\Models\Calculations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model {
    use SoftDeletes;
    
    public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}
}