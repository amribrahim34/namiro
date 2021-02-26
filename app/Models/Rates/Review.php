<?php

namespace Customers;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Review extends Eloquent {

	protected $table = 'reviews';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}