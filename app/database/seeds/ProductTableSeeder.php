<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$title = ['iPhone 6', 'iPad 2', 'iMac', 'Macbook Air', 'Laptop Dell', 'Dell Inspiron'];
		foreach(range(1, 40) as $index)
		{
			Product::create([
				'store_id'	=>	Store::first()->id,
				'cat_id'	=>	StoreCategory::where('store_id', Store::first()->id)->orderBy(DB::raw('RAND()'))->first()->id,
				'title'		=>	$title[rand(0, count($title)-1)],
				'vote'		=>	rand(0, 5),
				'price'		=>	rand(1,10)*1000000,
				'description'	=>	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni obcaecati ducimus sint dicta, ipsa laborum nesciunt assumenda illum aspernatur ab, dolor nam eos repellendus hic maxime iusto perspiciatis pariatur voluptates.',
				'image'		=>	'product_'.rand(1,5).'.jpg',
			]);
		}
	}

}