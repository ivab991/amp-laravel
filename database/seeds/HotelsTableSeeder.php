<?php

use Illuminate\Database\Seeder;
use App\Hotel;
class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'name' => 'Podgorica',
            'description' => 'Podgorica 1',
            'star' => '4',
            'street_address' => 'Address 1',
            'city' => 'Podgorica',
            'country' => 'Crna Gora',
        ]);
        Hotel::create([
            'name' => 'Hilton',
            'description' => 'Hilton 1',
            'star' => '5',
            'street_address' => 'Address 2',
            'city' => 'Podgorica',
            'country' => 'Crna Gora',
        ]);
        Hotel::create([
            'name' => 'Ramada',
            'description' => 'Ramada 1',
            'star' => '4',
            'street_address' => 'Address 3',
            'city' => 'Podgorica',
            'country' => 'Crna Gora',
        ]);
    }
}
