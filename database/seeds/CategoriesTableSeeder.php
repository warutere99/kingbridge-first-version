<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Categories = [
            [
                'id'    => 1,
                'category_name' => 'Properties',
            ],
            [
                'id'    => 2,
                'category_name' => 'Vehicles',
            ],
        
        ];

        Category::insert($Categories);
    }
}
