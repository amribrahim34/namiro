<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Size extends Eloquent {

	protected $table = 'sizes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}