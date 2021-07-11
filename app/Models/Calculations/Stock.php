<?php
namespace App\Models\Calculations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model 
{
	use SoftDeletes;

	public function product(){
		return $this->belongsTo('App\Models\Products\Product');
	}

	public function size(){
		return $this->belongsTo('App\Models\Specifications\Size');
	}

	public function color(){
		return $this->belongsTo('App\Models\Specifications\Color');
	}

	public function material(){
		return $this->belongsTo('App\Models\Specifications\Material');
	}

}