<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'roles' => '1',
                'password' => bcrypt('12345678'),
            ],
           [
                'name' => 'Teacher',
                'email' => 'teacher@mail.com',
                'roles' => '0',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Parent',
                'email' => 'parent@mail.com',
                'roles' => '2',
                'password' => bcrypt('12345678'),
            ],
             [
                'name' => 'Principal',
                'email' => 'principal@mail.com',
                'roles' => '3',
                'password' => bcrypt('12345678'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
