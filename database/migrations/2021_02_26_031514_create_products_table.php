<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('subcategory_id')->unsigned();
			$table->string('name');
			$table->float('price');
			$table->bigInteger('color_id')->unsigned();
			$table->bigInteger('material_id')->unsigned()->nullable();
			$table->string('discription');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}