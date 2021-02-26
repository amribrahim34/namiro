<?php

namespace Offers;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Offer extends Eloquent {

	protected $table = 'offers';
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

}