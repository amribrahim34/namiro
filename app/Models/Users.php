<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Users extends Eloquent {

	protected $table = 'users';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}