<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Cart extends Eloquent {

	protected $table = 'carts';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}