<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo danh mục sản phẩm
        $categories = ['Electronics', 'Clothing', 'Books', 'Home & Kitchen'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Lấy danh sách ID của các danh mục
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        // Thêm một số sản phẩm cố định
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'description' => 'A powerful gaming laptop',
                'price' => 1200.50,
                'category_id' => $categoryIds[0],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'T-shirt',
                'description' => 'Comfortable cotton T-shirt',
                'price' => 19.99,
                'category_id' => $categoryIds[1],
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cooking Book',
                'description' => 'A book with the best recipes',
                'price' => 25.00,
                'category_id' => $categoryIds[2],
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Thêm 100 sản phẩm giả bằng Faker
        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2, 5, 200), // Giá từ 5 đến 200
                'category_id' => $faker->randomElement($categoryIds), // Chọn ngẫu nhiên một danh mục
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
