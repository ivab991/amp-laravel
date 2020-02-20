<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Montenegro',
            'alpha2' => 'ME',
            'alpha3' => 'MNE',
        ]);
        Country::create([
            'name' => 'Serbia',
            'alpha2' => 'RS',
            'alpha3' => 'SRB',
        ]);
        Country::create([
            'name' => 'Germany',
            'alpha2' => 'DE',
            'alpha3' => 'DEU',
        ]);
        Country::create([
            'name' => 'Spain',
            'alpha2' => 'ES',
            'alpha3' => 'ESP',
        ]);
    }
}
