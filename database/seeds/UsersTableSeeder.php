<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'firstname'           => 'Flash',
                'secondname'           => 'Kuku',
                'verified_status'           => 'email',
                'phone_number'           => '072193231',
                'social_links'           => 'facebook',
                'email'          => 'flash@admin.com',
                'password'       => '$2y$10$fmFJCS87GEbmbqxeiABGe.Wh5H5Frr6n6384VNc/AvyZYuRGWsj4y',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'firstname'           => 'Josh',
                'secondname'           => 'Rally',
                'verified_status'           => 'email',
                'phone_number'           => '072193231',
                'social_links'           => 'facebook',
                'email'          => 'josh@admin.com',
                'password'       => '$2y$10$fmFJCS87GEbmbqxeiABGe.Wh5H5Frr6n6384VNc/AvyZYuRGWsj4y',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
