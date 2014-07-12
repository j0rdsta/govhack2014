<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAmenityLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('amenity_locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->decimal('lat',18, 9);
			$table->decimal('long',18, 9);
			$table->integer('amenity_id')->unsigned();
			$table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');
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
		Schema::drop('amenity_locations');
	}

}
