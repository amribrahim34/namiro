<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Product extends Model implements HasMedia {

	protected $table = 'products';
	use SoftDeletes;
	use HasRelationships;
	use HasMediaTrait;

	public function category(){
		return $this->belongsTo(Category::class)->withTrashed();
	}

	public function subcategory(){
		return $this->belongsTo(Subcategory::class)->withTrashed();
	}


	public function carts(){
		return $this->hasMany('App\Models\Processes\Cart')->withTrashed();
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

	public function scopeBySubcategory($query, $sub_cat_ids){
		return $query->whereIn('subcategory_id',$sub_cat_ids);
	}

	public function scopeByStock($query, $stock_ids){
		return $query->whereHas('stocks',function($query)
			use($stock_ids)
			{
				$query->whereIn('id',$stock_ids );
			}
		);
	}

	public function scopeByPriceRange($query, $range){
		return $query->whereBetween('price',$range );
	}

}