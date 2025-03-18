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

        $categories = ['Electronics', 'Clothing', 'Books', 'Home & Kitchen'];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $categoryIds = DB::table('categories')->pluck('id')->toArray();

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

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
                'price' => $faker->randomFloat(2, 5, 200),
                'category_id' => $faker->randomElement($categoryIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
