<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'product_name' => 'Example Product',
            'product_price' => 99.99,
            'brand' => 'Example Brand',
            'type' => 'Example Type',
            'product_details' => 'This is an example product.',
            'stock' => 10,
        ]);
    }
}
