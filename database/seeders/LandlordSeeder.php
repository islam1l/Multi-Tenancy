<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class LandlordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tenant::create([
            'name' => 'tenant1',
            'domain' => 'tenant1.com',
            'database' => 'tenant1',
        ]);

        \App\Models\Tenant::create([
            'name' => 'tenant2',
            'domain' => 'tenant2.com',
            'database' => 'tenant2',
        ]);
    }
}
