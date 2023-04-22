<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'discount_name' => 'Discount 1',
            'discount_description' => 'This is discount 1',
            'discount_amount' => 5.99,
            'start_date' => '2022-01-01 00:00:00',
            'end_date' => '2022-01-31 23:59:59',
        ]);
    }
}
