<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\discount;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discounts = [
        [
            'name' => 'Mega Diskon',
            'code'=> 'megadiskon',
            'description' => 'Diskon 60%',
            'percentage' => 60,
        ]
    ];

        discount::insert($discounts);
        
    }
}
