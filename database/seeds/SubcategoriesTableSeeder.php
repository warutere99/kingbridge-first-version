<?php

use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subcategories = [
            [
                'id'    => 1,
                'subcategory_name' => 'Appartment_ads',
                'category_id' => '1',
            ],
            [
                'id'    => 2,
                'subcategory_name' => 'House_ads',
                'category_id' => '1',
            ],
            [
                'id'    => 3,
                'subcategory_name' => 'Car_ads',
                'category_id' => '2',
            ],
            [
                'id'    => 4,
                'subcategory_name' => 'House_ads',
                'category_id' => '1',
            ],
            [
                'id'    => 5,
                'subcategory_name' => 'Bnb_ads',
                'category_id' => '1',
            ],
            [
                'id'    => 6,
                'subcategory_name' => 'Carshire_ads',
                'category_id' => '2',
            ],
        ];

        Subcategory::insert($Subcategories);
    }
}
