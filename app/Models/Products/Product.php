<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}