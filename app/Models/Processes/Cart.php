<?php

namespace App\Models\Processes;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

	protected $table = 'carts';
	protected $guarded = [];
	use SoftDeletes;

	public function stock()
	{
		return $this->belongsTo('App\Models\Calculations\Stock');
	}

	public function order()
	{
		return $this->belongsTo('App\Models\Processes\Order');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
