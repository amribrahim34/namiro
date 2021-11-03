<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function(Blueprint $table) {
			$table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('governorate');
			$table->string('address');
			$table->string('mobile');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
