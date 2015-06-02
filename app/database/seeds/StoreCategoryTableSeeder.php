<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StoreCategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$cat = ['Điện Thoại', 'Laptop', 'Máy tính bảng', 'Camera'];
		foreach($cat as $index)
		{
			StoreCategory::create([
				'store_id'	=>	Store::first()->id,
				'name'		=>	$index,
			]);
		}
	}

}