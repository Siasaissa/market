<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'category' => 'Electronics',
            'subcategory' => 'Phones',
            'product_name' => 'iPhone 14',
            'description' => 'Latest Apple smartphone.',
            'price' => 1200000,
            'image1' => 'images/iphone14.jpg',
            'image2' => null,
            'image3' => null,
        ]);
    }
}
