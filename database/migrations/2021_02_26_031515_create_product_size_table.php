<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSizeTable extends Migration {

	public function up()
	{
		Schema::create('product_size', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('product_id')->unsigned();
			$table->bigInteger('size_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('product_size');
	}
}