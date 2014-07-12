<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		City::create([
			'name' => 'Gold Coast',
			'lat' => '-28.0293756',
			'long' => ' 153.4218931'
		]);
	}

}
