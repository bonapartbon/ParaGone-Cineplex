<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'is_admin' => '1',
                'name' => 'Admin',
                'email_verified_at' => '2021-06-21 03:59:08',
                'email' => 'admin@paragone.com',
                'password' => '$2y$10$5nlpheg6mh6mcTTjyaJLtebcgu.u02b23mid1TJ1T1ad6xaIJyU02'
            ],
            [
                'is_admin' => '0',
                'name' => 'User',
                'email_verified_at' => '2021-06-21 04:00:25',
                'email' => 'user@paragone.com',
                'password' => '$2y$10$OmJol6eTtho/KpWC86m8wuFT67NmCx.4Zy1cAmaBeyfT7GfS/8xfq'
            ]
        ];

        User::insert($users);
    }
}
