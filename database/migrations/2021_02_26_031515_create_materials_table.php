<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialsTable extends Migration {

	public function up()
	{
		Schema::create('materials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
		});
	}

	public function down()
	{
		Schema::drop('materials');
	}
}