<?php

namespace Customers;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Rate extends Eloquent {

	protected $table = 'rates';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}