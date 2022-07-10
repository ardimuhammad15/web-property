<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\rent;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rents = [
        [
            'name' => 'minimalis',
            'slug'=> 'minimalis-BSD',
            'price' => 650000000,
            'location' => 'BSD',
            'address' => 'BSD Tangerang',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],
        [
            'name' => 'primerose',
            'slug'=> 'primerose-sentul',
            'price' => 500000000,
            'location' => 'Sentul',
            'address' => 'Sentul City',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],
        [
            'name' => 'bintaro',
            'slug'=> 'bintaro-residence',
            'price' => 700000000,
            'location' => 'Bintaro',
            'address' => 'Bintaro, Tangerang Selatan',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],
        [
            'name' => 'bejo',
            'slug'=> 'bejo-residence',
            'price' => 770000000,
            'location' => 'Mampang',
            'address' => 'Mampang, Jakarta Selatan',
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
        ],
    ];

        rent::insert($rents);
    
    }
}