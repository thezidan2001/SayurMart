<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::create([
            'product_id' => 1,
            'order_detail_id' => 1,
            'quantity' => 2,
            'price' => 10.00,
            'discount_amount' => 2.00,
        ]);
    }
}
