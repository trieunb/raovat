<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$user = Sentry::createUser([
			'username'	=>	'admin',
			'password'	=>	'admin',
			'email'	=>	'admin@localhost',
			'activated'	=>	true
			]);
		$adminGroup = Sentry::findGroupById(1);

		    // Assign the group to the user
		   $user->addGroup($adminGroup);
		foreach(range(1, 50) as $index)
		{
			$user = Sentry::createUser([
				'username'	=>	$faker->username,
				'password'	=>	'123456',
				'activated'	=>	true,
				'email'	=>	$faker->email,
				'full_name'	=>	$faker->firstName . " " . $faker->lastName,
				'address'	=>	$faker->address,
				'phone'		=>	'0977 777 777'
				]);
			$adminGroup = Sentry::findGroupById(rand(2,3));

		    // Assign the group to the user
		    $user->addGroup($adminGroup);
		}
	}

}