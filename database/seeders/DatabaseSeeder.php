<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Brands;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Test 2User',
            'email' => 'test2@example.com',
        ]);


        Brand::create([
            'product_brand'=>'Brand A',
            'status'=>'Active',
    ]);
        Brand::create([
            'product_brand'=>'Brand B',
            'status'=>'Active',
    ]);
        Brand::create([
            'product_brand'=>'Brand C',
            'status'=>'Active',
    ]);

  
    }
}
