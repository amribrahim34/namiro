<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

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