<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ProductTableSeeder');
		// $this->call('GroupTableSeeder');
		// $this->call('StoreCatTableSeeder');
		// $this->call('ProductTableSeeder');
		// $this->call('StoreCategoryTableSeeder');
	}

}
