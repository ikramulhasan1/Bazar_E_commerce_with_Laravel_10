<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            ProductSeeder::class
        ]);
    }
}