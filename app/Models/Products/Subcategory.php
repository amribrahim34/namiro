<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Subcategory extends Eloquent {

	protected $table = 'subcategories';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}