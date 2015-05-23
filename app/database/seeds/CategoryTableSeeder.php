<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$cat = array(
			array('tendanhmuc'=>'Nhà đất - Cần Bán'),
			array('tendanhmuc'=>'Nhà đất - Cần Mua'),
			array('tendanhmuc'=>'Nhà đất - Cần Thuê'),
			array('tendanhmuc'=>'Nhà đất - Cho Thuê'),
			array('tendanhmuc'=>'Vật liệu xây dựng'),
			array('tendanhmuc'=>'Ôtô - Môtô'),
			array('tendanhmuc'=>'Điện thoại'),
			array('tendanhmuc'=>'Điện tử - Tin học'),
			array('tendanhmuc'=>'Đồ Gia dụng'),
			array('tendanhmuc'=>'Internet, Card'),
			array('tendanhmuc'=>'Sang nhượng'),
			array('tendanhmuc'=>'Cho thuê'),
			array('tendanhmuc'=>'Thời trang - Đẹp'),
			array('tendanhmuc'=>'Dịch vụ'),
			array('tendanhmuc'=>'Dạy và Học'),
			array('tendanhmuc'=>'Các loại khác'),
			);
		Category::insert($cat);
	}

}