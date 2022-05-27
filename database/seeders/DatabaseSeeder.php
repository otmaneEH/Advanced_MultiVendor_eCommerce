<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // INSERT MY DATA
         $this->call(UsersTableSeeder::class);
         // INSERT 50 FAKER DATA
         \App\Models\User::factory(50)->create();
    }
}
