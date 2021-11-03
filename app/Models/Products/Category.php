<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
// use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	use SoftDeletes;
	protected $guarded = [];
	// use HasRelationships;

	public function products (){
		return $this->hasManyThrough(Product::class,subcategory::class);
	}

	public function subcategories (){
		return $this->hasMany(Subcategory::class);
	}
}