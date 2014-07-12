<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class AmenitiesTableSeeder extends Seeder {

	public function run()
	{

		Amenity::create([
			"name" => "Public Barbeques",
			"city_id" => 1,
			"type" => "JSON",
			"url" => "http://data.gov.au/geoserver/public-barbeques/wfs?request=GetFeature&typeName=23218e8f_babe_4e37_81d1_5424a4d1c568&outputFormat=json"
		]);

		Amenity::create([
			"name" => "Bike Racks",
			"city_id" => 1,
			"type" => "JSON",
			"url" => "http://data.gov.au/geoserver/bike-racks/wfs?request=GetFeature&typeName=a58544a9_86de_4c26_90db_3e7c103ded50&outputFormat=json",
		]);
	}

}
