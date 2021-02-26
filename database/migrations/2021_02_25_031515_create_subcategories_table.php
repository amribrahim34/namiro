<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration {

	public function up()
	{
		Schema::create('subcategories', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('title');
			$table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
			$table->softDeletes();
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('subcategories');
	}
}