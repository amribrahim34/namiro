<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSizeTable extends Migration {

	public function up()
	{
		Schema::create('product_size', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('size_id');
			$table->foreign('size_id')->references('id')->on('sizes');
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('product_size');
	}
}