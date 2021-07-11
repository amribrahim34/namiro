<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->float('price');
			$table->unsignedBigInteger('subcategory_id');
			$table->foreign('subcategory_id')->references('id')->on('subcategories');
			$table->text('discription');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}