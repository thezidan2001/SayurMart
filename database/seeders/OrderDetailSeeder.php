<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::create([

            'user_address_id' => 1,
            'user_payment_id' => 1,
            'subtotal' => 18.00,
            'discount_amount' => 2.00,
            'tax' => 1.08,
            'total' => 17.08,
            'status' => 'pending',
        ]);
    }
}
