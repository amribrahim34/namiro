<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestmonialsTable extends Migration {

	public function up()
	{
		Schema::create('testmonials', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name');
			$table->string('content');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('testmonials');
	}
}