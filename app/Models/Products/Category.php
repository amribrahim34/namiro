<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

	protected $table = 'categories';
	public $timestamps = true;
	use SoftDeletes;

	public function products (){
		return $this->hasMany(Product::class);
	}

	public function subcategories (){
		return $this->hasMany(Subcategory::class);
	}
}