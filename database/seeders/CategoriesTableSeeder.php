<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Trái cây',
                'description' => 'Trái cây thơm ngon',
            ],
            [
                'name' => 'Rau củ',
                'description' => 'Rau củ tươi',
            ]
        ]);
    }
}
