<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StoreBranch;

class StoreBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StoreBranch::create([
            'name' => 'Main Branch',
            'address' => '123 Main St, Anytown USA',
            'manager_id' => 1,
        ]);
    }
}
