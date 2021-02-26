<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Product extends Eloquent {

	protected $table = 'products';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}