<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model {

	protected $table = 'subcategories';
	use SoftDeletes;

	public function products (){
		return $this->hasMany(Product::class);
	}

	public function category (){
		return $this->belongsTo(Category::class);
	}
}