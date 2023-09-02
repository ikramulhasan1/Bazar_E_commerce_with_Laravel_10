<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::factory(100)->create();

        // DB::table('products')->factory(100)->insert([
        //     'title' => 'Test Product',
        //     'description' => 'Test Product Description',
        //     'image' => 'images/test.jpg',
        // ]);
    }
}