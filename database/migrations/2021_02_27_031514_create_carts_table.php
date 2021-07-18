<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration {

	public function up()
	{
		Schema::create('carts', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->unsignedBigInteger('stock_id');
			$table->foreign('stock_id')->references('id')->on('stocks');
			$table->unsignedBigInteger('order_id')->nullable();
			$table->foreign('order_id')->references('id')->on('orders');
			$table->integer('quantity');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('carts');
	}
}