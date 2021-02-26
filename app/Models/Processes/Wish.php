<?php

namespace Wishes;

use Illuminate\Database\Eloquent\SoftDeletes;

class Wish extends Model {

	protected $table = 'wishes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}