<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductNewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); 
        
        $categories = DB::table('categories')->pluck('id')->toArray();

        Schema::disableForeignKeyConstraints();
        DB::table('ProductNew')->truncate();
        Schema::enableForeignKeyConstraints();

        $products = [];
        for ($i = 0; $i < 100; $i++) {
            $products[] = [
                'name' => Str::slug($faker->unique()->words(2, true)),
                'price' => $faker->numberBetween(50, 500), 
                'image' => $faker->imageUrl(200, 200, 'food'), 
                'cate_id' => $faker->randomElement($categories), 
            ];
        }
        DB::table('ProductNew')->insert($products);
        //Cách viết khác
        // foreach (range(1, 100) as $index) {
        //     DB::table('newProduct')->insert([
        //         'name' => $faker->unique()->word,
        //         'price' => $faker->numberBetween(10000, 100000),
        //         'image' => $faker->imageUrl(200, 200, 'products'),
        //         'cate_id' => $faker->randomElement($categoryIds),
        //     ]);
        // }
    }
}