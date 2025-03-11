<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
use App\Models\Division;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisiPrd = Division::where('name', 'prd')->first();
        $divisiHr = Division::where('name', 'hr')->first();
        $divisiGa = Division::where('name', 'ga')->first();
        $divisiMkt = Division::where('name', 'mkt')->first();
        $divisiEcm = Division::where('name', 'ecm')->first();
        $divisiBdRnd = Division::where('name', 'bdrnd')->first();
        $divisiCnc = Division::where('name', 'cnc')->first();
        $divisiWrhs = Division::where('name', 'wrhs')->first();
        $divisiQcs = Division::where('name', 'qcs')->first();
        $divisiQcp = Division::where('name', 'qcp')->first();
        $divisiQa = Division::where('name', 'qa')->first();
        $divisiMt = Division::where('name', 'mt')->first();
        $divisiProtech = Division::where('name', 'protech')->first();
        $divisiFarm = Division::where('name', 'farm')->first();
        $divisiFinance = Division::where('name', 'finance')->first();
        $divisiExport = Division::where('name', 'export')->first();
        $divisiPurchase = Division::where('name', 'purchase')->first();

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

        $regularUser = User::create([
            'name' => 'Galih',
            'email' => 'galih@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiPrd->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'choty',
            'email' => 'choty@hr.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiHr->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'choty',
            'email' => 'choty@ga.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiGa->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Frida',
            'email' => 'frida@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiMkt->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Maulin',
            'email' => 'maulin@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiEcm->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Nisom',
            'email' => 'nisom@bdrnd.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiBdRnd->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Yhunis',
            'email' => 'yhunis@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiCnc->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Hangga',
            'email' => 'hangga@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiWrhs->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Shokibi',
            'email' => 'kibi@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiQcs->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Nisom',
            'email' => 'nisom@qcp.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiQcp->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Ale',
            'email' => 'ale@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiQa->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Khopid',
            'email' => 'khopid@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiMt->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Winarto',
            'email' => 'winarto@protech.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiProtech->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Winarto',
            'email' => 'winarto@farm.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiFarm->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Kennet',
            'email' => 'ken@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiExport->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Farid',
            'email' => 'farid@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiFinance->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');

        $regularUser = User::create([
            'name' => 'Nizar',
            'email' => 'nizar@mail.com', // Email user keuangan
            'password' => bcrypt('user123'),
            'division_id' => $divisiPurchase->id, // Berikan divisi Keuangan ke user biasa ini
        ]);
        $regularUser->assignRole('user');




    }
}
