<?php

use App\Appartment_ad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Appartments_adsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Appartment_ads = [
            [
                'title' => Str::random(10),
                'ads_type' => 'Rent',
                'real_state_type' => Str::random(10),
                'condition' => Str::random(10),
                'price' => 10030060,
                'bedroom' => 3,
                'bathroom' => 2,
                'amenities' => Str::random(20),
                'description' => Str::random(50),
                'square_meters' => 2143000,
                'photos' => Str::random(10),
                'category_id' => 1,
                'subcategory_id' => 1,
                'county_id' => 1,
                'city_id' => 2,
                'user_id' => 1,
                'package_id' => 1,
      
            ],
            [
                'title' => Str::random(10),
                'ads_type' => 'Sale',
                'real_state_type' => Str::random(10),
                'condition' => Str::random(10),
                'price' => 10030060,
                'bedroom' => 3,
                'bathroom' => 2,
                'amenities' => Str::random(20),
                'description' => Str::random(50),
                'square_meters' => 2143000,
                'photos' => Str::random(10),
                'category_id' => 1,
                'subcategory_id' => 2,
                'county_id' => 3,
                'city_id' => 2,
                'user_id' => 1,
                'package_id' => 1,
      
            ],
        
        ];

        Appartment_ad::insert($Appartment_ads);
    }
}
