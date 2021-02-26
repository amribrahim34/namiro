<?php

namespace products;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Material extends Eloquent {

	protected $table = 'materials';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}