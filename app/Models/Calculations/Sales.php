<?php

namespace Sales;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Sales extends Eloquent {

	protected $table = 'product_sales';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}