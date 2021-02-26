<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWishesTable extends Migration {

	public function up()
	{
		Schema::create('wishes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('wishes');
	}
}