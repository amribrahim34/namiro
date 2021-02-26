<?php

namespace Wishes;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Wish extends Eloquent {

	protected $table = 'wishes';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}