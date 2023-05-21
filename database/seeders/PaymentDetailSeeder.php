<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentDetail;

class PaymentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentDetail::create([
            'name' => 'John Doe',
            'account_number' => '1234567890',
            'bank_name' => 'Bank ABC',
            'user_id' => 1,
        ]);
    }
}
