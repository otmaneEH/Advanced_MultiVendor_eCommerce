<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert some data
        DB::table('users')->insert([

            // admin
            [
                'full_name' => 'mohammad salah Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'username' => 'Admin',
                'role' => 'admin',
                'status' => 'active',
            ],

             // vendor
             [
                'full_name' => 'mohammad salah Vendor',
                'email' => 'vendor@gmail.com',
                'password' => Hash::make('123'),
                'username' => 'Vendor',
                'role' => 'vendor',
                'status' => 'active',

            ],

             // customer
             [
                'full_name' => 'mohammad salah Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('123'),
                'username' => 'customer',
                'role' => 'customer',
                'status' => 'active',

            ],
        ]);
    }
}
