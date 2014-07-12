<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class AmenitiesTableSeeder extends Seeder {

	public function run()
	{

		Amenity::create([
			"name" => "Public Barbeques",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/23218e8f-babe-4e37-81d1-5424a4d1c568/resource/907d5539-bb78-468e-af1f-4e864d42b89f/download/barbeque.kmz"
		]);

		Amenity::create([
			"name" => "Bike Racks",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/a58544a9-86de-4c26-90db-3e7c103ded50/resource/8da50b6f-fa02-4f8e-bede-873709b16af8/download/bicyclefitting.kmz",
		]);

		Amenity::create([
			"name" => "Outdoor Tables",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "http://data.gov.au/dataset/03ad85ac-3259-4f6f-9479-509ea4b8957d/resource/4f6f5d8f-c343-4014-a009-e08101ecc7ff/download/tableoutdoor.kmz",
		]);		

		Amenity::create([
			"name" => "Road Closures",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "http://data.gov.au/dataset/eb431735-a2cf-4abd-acf3-f84a099d0b02/resource/5e59cd33-8729-4b54-998f-f59167a74f94/download/gcroadclosure.kmlx",
		]);		

		Amenity::create([
			"name" => "Fish Cleaning Sinks",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/860b399c-21ea-4783-8e5d-4f93a8c837d1/resource/275936e2-0ff5-42a1-8007-2c034bf8539a/download/fishcleanstation.kmz",
		]);		

		Amenity::create([
			"name" => "Boat Ramps",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/af1b8d1c-a186-4e72-8e9e-549a8065e970/resource/b74fc79d-7b18-4892-be02-3093da6fae08/download/boatingfacility.kmz",
		]);

		Amenity::create([
			"name" => "Drinking Fountain",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/d102dd0e-2203-4825-a041-627aa0e08afc/resource/1f56566a-e2a5-4e59-93e0-03cf50b6de12/download/drinkingfountain.kmz",
		]);		

		Amenity::create([
			"name" => "Fitness Equipment",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/4fbc5195-330a-4b70-81e1-a901a444ed6f/resource/8dafc09a-257f-4d01-b8c5-36d6747c0e3b/download/fitnessequipment.kmz",
		]);			
		
		Amenity::create([
			"name" => "Sports Parks",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/07d7fc2c-d923-4d10-bf39-edd0c5c8b450/resource/4c4f0c4c-534f-43fa-ac01-28bad4814200/download/playingsurfaces.kmz",
		]);		

		Amenity::create([
			"name" => "Artificial Reefs",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/a916e5f4-5d73-43c4-bff3-f03312fe3f00/resource/32c47974-5d2b-4040-ad18-4a5b5db812ad/download/artificialreef.kmz",
		]);			
		
		Amenity::create([
			"name" => "Dog Bag Dispensers",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/0082553d-d26b-445a-b1c0-b566bc603cdd/resource/a0fc7373-5b9c-4d13-88b1-0953408d4829/download/dogbagdispenser.kmz",
		]);

		Amenity::create([
			"name" => "Heritage Listings",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/2b0564bc-3d0c-4c44-9dfd-4edb01b2d900/resource/2f88dd06-3d60-4451-84b9-cefe2485aed6/download/gcccheritage.kmz",
		]);

		Amenity::create([
			"name" => "Permitted and Prohibited Dog Areas",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/c41fa3c2-9beb-4d7f-ad27-9cfb16f3a0e3/resource/7f41907e-9eb4-43ae-be7a-d845989b61e2/download/dogareas.kmz",
		]);

		Amenity::create([
			"name" => "Cycleway Guide",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/5c841f92-0d3c-409a-bbb2-c9b5c81cc490/resource/755ea8cc-5f6a-4083-92b2-6b5576836a43/download/cyclewayguide.kmz",
		]);
		
		Amenity::create([
			"name" => "Parks Shelters",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/fc22292f-906e-43b3-ad47-023c75e081c2/resource/b1717851-bcf9-4e6f-9875-f551200eee1b/download/shelter.kmz",
		]);

		Amenity::create([
			"name" => "Public Showers",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/f5f3090d-16a2-4ef5-a6c6-217bfb111d75/resource/b45c804a-ebdc-4022-9056-b49db08af243/download/shower.kmz",
		]);	

		Amenity::create([
			"name" => "Outdoor Taps",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/f4864a90-80fc-46e9-993b-375f04054bd9/resource/a851b79c-96b8-472e-8f92-c77a4f6edac9/download/tap.kmz",
		]);				

		Amenity::create([
			"name" => "Outdoor Tables",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/03ad85ac-3259-4f6f-9479-509ea4b8957d/resource/4f6f5d8f-c343-4014-a009-e08101ecc7ff/download/tableoutdoor.kmz",
		]);		

		Amenity::create([
			"name" => "Caravan Parks",
			"city_id" => 1,
			"type" => "KMZ",
			"url" => "https://data.gov.au/dataset/191d8a90-f617-481c-84fa-8c2f4b92a172/resource/ceb0fa1f-e9f4-4e21-b52a-aa590a72a70e/download/caravanpark.kmz",
		]);											
											
	}

}
