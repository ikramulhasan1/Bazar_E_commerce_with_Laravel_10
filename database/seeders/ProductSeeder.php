<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('products')->insert([
            'title' => 'Test Product',
            'description' => 'Test Product Description',
            'image' => 'images/test.jpg',
        ]);
    }
}