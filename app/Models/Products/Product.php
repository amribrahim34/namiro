<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	use SoftDeletes;

	public function category(){
		return $this->belongsTo(Category::class);
	}

	public function subcategory(){
		return $this->belongsTo(Subcategory::class);
	}

	public function subcategories(){
		return $this->belongsTo(Subcategory::class);
	}

	public function color(){
		return $this->belongsTo('App\Models\Specifications\Color');
	}

	public function material(){
		return $this->belongsTo('App\Models\Specifications\Material');
	}

	public function size(){
		return $this->belongsTo('App\Models\Specifications\Size');
	}

	public function carts(){
		return $this->hasMany('App\Models\Processes\Cart');
	}

	public function orders(){
		return $this->hasMany('App\Models\Processes\Order');
	}

	public function rates(){
		return $this->hasMany('App\Models\Feedback\Rate');
	}

	public function reviews(){
		return $this->hasMany('App\Models\Feedback\Review');
	}

	public function offers(){
		return $this->hasMany('App\Models\Calculations\Offer');
	}

	public function sales(){
		return $this->hasMany('App\Models\Calculations\Sales');
	}

	public function stocks(){
		return $this->hasMany('App\Models\Calculations\Stock');
	}
}