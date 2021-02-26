<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestmonialsTable extends Migration {

	public function up()
	{
		Schema::create('testmonials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->string('content');
		});
	}

	public function down()
	{
		Schema::drop('testmonials');
	}
}