<?php

namespace Database\Seeders;

use App\Models\purchase;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            prdSeeder::class,
            cncSeeder::class,
            bdRndSeeder::class,
            ecmSeeder::class,
            exportSeeder::class,
            farmSeeder::class,
            gaSeeder::class,
            hrSeeder::class,
            mktSeeder::class,
            mtSeeder::class,
            protechSeeder::class,
            qaSeeder::class,
            qcpSeeder::class,
            wrhsSeeder::class,
            purchaseSeeder::class,
            financeSeeder::class,
            
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
