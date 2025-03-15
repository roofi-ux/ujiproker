<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat roles
       
        Role::create(['name' => 'prd']);
        Role::create(['name' => 'ga']);
        Role::create(['name' => 'hr']);
        Role::create(['name' => 'mkt']);
        Role::create(['name' => 'ecm']);
        Role::create(['name' => 'bdrnd']);
        Role::create(['name' => 'cnc']);
        Role::create(['name' => 'wrhs']);
        Role::create(['name' => 'qcs']);
        Role::create(['name' => 'qcp']);
        Role::create(['name' => 'qa']);
        Role::create(['name' => 'mt']);
        Role::create(['name' => 'protech']);
        Role::create(['name' => 'farm']);
        Role::create(['name' => 'finance']);
        Role::create(['name' => 'purchase']);
        Role::create(['name' => 'export']);
        // ... tambahkan role untuk divisi lain
    }
}