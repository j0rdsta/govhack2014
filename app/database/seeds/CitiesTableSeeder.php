<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class CitiesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			City::create([
				'name' => 'Gold Coast', 
				'lat' => '-28.0293756',
				'long' => ' 153.4218931'
			]);
		}
	}

}
