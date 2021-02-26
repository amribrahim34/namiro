<?php

namespace Orders;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Order extends Eloquent {

	protected $table = 'orders';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}