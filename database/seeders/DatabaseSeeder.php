<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\LandlordSeeder;
use Database\Seeders\UserSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     */
    public function run()
    {
        if ($_SERVER['argv'][1] != 'tenants:migrate') {
            return $this->call(LandlordSeeder::class);
        }

        $this->call(UserSeeder::class);
    }
}
