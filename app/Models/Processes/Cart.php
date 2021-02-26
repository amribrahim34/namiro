<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model {

	protected $table = 'carts';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}