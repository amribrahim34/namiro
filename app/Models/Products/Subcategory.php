<?php

namespace Products;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model {

	protected $table = 'subcategories';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

}