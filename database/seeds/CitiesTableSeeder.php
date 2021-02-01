<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cities = [
            [
                'id'    => 1,
                'city' => 'Nairobi Central',
                'county_id' => 1,
            ],
            [
                'id'    => 2,
                'city' => 'Parklands',
                'county_id' => 1,
            ],
            [
                'id'    => 3,
                'city' => 'Lavington',
                'county_id' => 1,
            ],
            [
                'id'    => 4,
                'city' => 'Mtwapa',
                'county_id' => 3,
            ],
            [
                'id'    => 5,
                'city' => 'Bamburi',
                'county_id' => 3,
            ],
            [
                'id'    => 6,
                'city' => 'Thika Town',
                'county_id' => 2,
            ],
        
        
        ];

        City::insert($Cities);
    }
}
