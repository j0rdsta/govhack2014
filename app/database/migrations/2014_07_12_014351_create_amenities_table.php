<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmenitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('amenities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('type');
			$table->string('url');
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
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
		Schema::drop('amenities');
	}

}
