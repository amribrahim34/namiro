<?php

namespace inventory;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Stock extends Eloquent {

	protected $table = 'stocks';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}