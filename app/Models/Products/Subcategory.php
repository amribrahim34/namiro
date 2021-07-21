<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model {

	protected $guarded = [];
	protected $table = 'subcategories';
	use SoftDeletes;
	

	public function products (){
		return $this->hasMany(Product::class);
	}

	public function category (){
		return $this->belongsTo(Category::class);
	}
}