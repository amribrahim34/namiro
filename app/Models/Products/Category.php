<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Category extends Eloquent {

	protected $table = 'categories';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}