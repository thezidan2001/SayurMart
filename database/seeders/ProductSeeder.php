<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

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
            'product_name' => 'Product 1',
            'product_description' => 'This is product 1',
            'product_price' => 10.99,
            'product_category_id' => 1,
            'store_branch_id' => 1,
        ]);
    }
}
