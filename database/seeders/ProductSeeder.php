<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 9.99,
            'date' => '2023-07-04',
            'description' => 'This is Product 1',
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 19.99,
            'date' => '2023-07-05',
            'description' => 'This is Product 2',
        ]);
    }
}
