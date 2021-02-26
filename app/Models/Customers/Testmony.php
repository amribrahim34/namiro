<?php

namespace Testmonials;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Testmony extends Eloquent {

	protected $table = 'testmonials';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}