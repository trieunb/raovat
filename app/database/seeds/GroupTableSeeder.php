<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$group = Sentry::createGroup(array(
	        'name'        => 'SuperUser',
	        'permissions' => array(
	            'admin' => 1,
	            'users' => 1,
	        ),
	    ));
	    $group = Sentry::createGroup(array(
	        'name'        => 'Administrator',
	        'permissions' => array(
	            'users' => 1,
	        ),
	    ));
	    $group = Sentry::createGroup(array(
	        'name'        => 'User',
	        'permissions' => array(
	        ),
	    ));
	}

}