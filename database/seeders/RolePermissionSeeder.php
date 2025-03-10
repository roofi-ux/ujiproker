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
        // $divisiPrd = Division::where('name', 'Divisi prd')->first();
        // $divisiHr = Division::where('name', 'Divisi hr')->first();
        // $divisiGa = Division::where('name', 'Divisi ga')->first();
        // $divisiMkt = Division::where('name', 'Divisi mkt')->first();
        // $divisiEcm = Division::where('name', 'Divisi ecm')->first();       
        // $divisiBdRnd = Division::where('name', 'Divisi bdrnd')->first();
        // $divisiCnc = Division::where('name', 'Divisi cnc')->first();
        // $divisiWrhs = Division::where('name', 'Divisi wrhs')->first();
        // $divisiQcs = Division::where('name', 'Divisi qcs')->first();
        // $divisiQcp = Division::where('name', 'Divisi qcp')->first();
        // $divisiQa = Division::where('name', 'Divisi qa')->first();
        // $divisiMt = Division::where('name', 'Divisi mt')->first();
        // $divisiProtech = Division::where('name', 'Divisi protech')->first();
        // $divisiFarm = Division::where('name', 'Divisi farm')->first();

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

        // $regularUser = User::create([
        //     'name' => 'Galih',
        //     'email' => 'galih@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiPrd->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'choty',
        //     'email' => 'choty@hr.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiHr->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'choty',
        //     'email' => 'choty@ga.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiGa->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Frida',
        //     'email' => 'frida@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiMkt->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Maulin',
        //     'email' => 'maulin@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiEcm->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');     

        // $regularUser = User::create([
        //     'name' => 'Nisom',
        //     'email' => 'nisom@bdrnd.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiBdRnd->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Yhunis',
        //     'email' => 'yhunis@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiCnc->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Hangga',
        //     'email' => 'hangga@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiWrhs->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Shokibi',
        //     'email' => 'kibi@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiQcs->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Nisom',
        //     'email' => 'nisom@qcp.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiQcp->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Ale',
        //     'email' => 'ale@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiQa->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Khopid',
        //     'email' => 'khopid@mail.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiMt->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Winarto',
        //     'email' => 'winarto@protech.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiProtech->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');

        // $regularUser = User::create([
        //     'name' => 'Winarto',
        //     'email' => 'winarto@farm.com', // Email user keuangan
        //     'password' => bcrypt('user123'),
        //     'division_id' => $divisiFarm->id, // Berikan divisi Keuangan ke user biasa ini
        // ]);
        // $regularUser->assignRole('user');




    }
}
