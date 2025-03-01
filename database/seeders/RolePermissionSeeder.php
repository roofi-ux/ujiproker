<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'create data',
            'view data',
            'update data',
            'delete data',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo('create data', 'view data', 'update data', 'delete data');

        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo('view data', 'update data', );

        $user = User::create([
            'name' => 'Roofi',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'),
        ]);
        $user->assignRole('admin');


    }
}
