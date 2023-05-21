<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserPayment;

class UserPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserPayment::create([
            'cardholder_name' => 'John Doe',
            'card_number' => '1234567812345678',
            'expiration_date' => '12/23',
            'cvv' => '123',
            'user_id' => 1,
        ]);
    }
}
