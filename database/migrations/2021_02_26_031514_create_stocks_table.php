<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration {

	public function up()
	{
		Schema::create('stocks', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('amount');
			$table->unsignedBigInteger('product_id');
			$table->foreign('product_id')->references('id')->on('products');
			$table->unsignedBigInteger('material_id')->nullable();
			$table->foreign('material_id')->references('id')->on('materials');
			$table->unsignedBigInteger('color_id')->nullable();
			$table->foreign('color_id')->references('id')->on('colors');
			$table->unsignedBigInteger('size_id')->nullable();
			$table->foreign('size_id')->references('id')->on('sizes');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('stocks');
	}
}