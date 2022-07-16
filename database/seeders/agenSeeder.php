<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class agenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agens = [
            [
                'name' => 'Jenny Soeya',
                'phone_number'=> '0877882228',
            ],
            [
                'name' => 'Simon Jess',
                'phone_number'=> '085885444534',
            ],
            [
                'name' => 'Conway Colin',
                'phone_number'=> '081286775455',
            ],
            [
                'name' => 'Teddy Morley',
                'phone_number'=> '087882156545',
            ],
        ];

        agen::insert($agens);
    }
}
