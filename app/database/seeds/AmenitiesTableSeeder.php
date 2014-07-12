<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class AmenitiesTableSeeder extends Seeder {

	public function run()
	{

		Amenity::create([
			"name" => "Public Barbeques",
			"city_id" => 1,
			"slug" => "public_barbeques"
		]);

		Amenity::create([
			"name" => "Bike Racks",
			"city_id" => 1,
			"slug" => "bike_racks",
		]);

		Amenity::create([
			"name" => "Outdoor Tables",
			"city_id" => 1,
			"slug" => "outdoor_tables",
		]);		

		Amenity::create([
			"name" => "Road Closures",
			"city_id" => 1,
			"slug" => "road_closures",
		]);		

		Amenity::create([
			"name" => "Fish Cleaning Sinks",
			"city_id" => 1,
			"slug" => "fish_cleaning_sinks",
		]);		

		Amenity::create([
			"name" => "Boat Ramps",
			"city_id" => 1,
			"slug" => "boat_ramps",
		]);

		Amenity::create([
			"name" => "Drinking Fountain",
			"city_id" => 1,
			"slug" => "drinking_fountain",
		]);		

		Amenity::create([
			"name" => "Fitness Equipment",
			"city_id" => 1,
			"slug" => "fitness_equipment",
		]);			
		
		Amenity::create([
			"name" => "Sports Parks",
			"city_id" => 1,
			"slug" => "sports_parks",
		]);		

		Amenity::create([
			"name" => "Artificial Reefs",
			"city_id" => 1,
			"slug" => "artificial_reefs",
		]);			
		
		Amenity::create([
			"name" => "Dog Bag Dispensers",
			"city_id" => 1,
			"slug" => "dog_bag_dispensers",
		]);

		Amenity::create([
			"name" => "Heritage Listings",
			"city_id" => 1,
			"slug" => "heritage_listings",
		]);

		Amenity::create([
			"name" => "Permitted and Prohibited Dog Areas",
			"city_id" => 1,
			"slug" => "permitted_and_prohibited_dog_areas",
		]);

		Amenity::create([
			"name" => "Cycleway Guide",
			"city_id" => 1,
			"slug" => "cycleway_guide",
		]);
		
		Amenity::create([
			"name" => "Parks Shelters",
			"city_id" => 1,
			"slug" => "parks_shelters",
		]);

		Amenity::create([
			"name" => "Public Showers",
			"city_id" => 1,
			"slug" => "public_showers",
		]);	

		Amenity::create([
			"name" => "Outdoor Taps",
			"city_id" => 1,
			"slug" => "outdoor_taps",
		]);				

		Amenity::create([
			"name" => "Outdoor Tables",
			"city_id" => 1,
			"slug" => "outdoor_tables",
		]);		

		Amenity::create([
			"name" => "Caravan Parks",
			"city_id" => 1,
			"slug" => "caravan_parks",
		]);											
											
	}

}
