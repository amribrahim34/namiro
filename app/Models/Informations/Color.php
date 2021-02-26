<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Color extends Eloquent {

	protected $table = 'colors';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}