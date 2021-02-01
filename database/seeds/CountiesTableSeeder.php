<?php

use App\County;
use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Counties = [
            [
                'id'    => 1,
                'county_name' => 'Nairobi',
                'country' => 'Kenya',
            ],
            [
                'id'    => 2,
                'county_name' => 'Thika',
                'country' => 'Kenya',
            ],
            [
                'id'    => 3,
                'county_name' => 'Mombasa',
                'country' => 'Kenya',
            ],
        
        ];

        County::insert($Counties);
    }
}
