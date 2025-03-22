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
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat permissions
        $permissions = [
            'create data',
            'view data',
            'update data',
            'delete data',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Buat roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $prdRole = Role::create(['name' => 'prd']);
        $gaRole = Role::create(['name' => 'ga']);
        $hrRole = Role::create(['name' => 'hr']);
        $mktRole = Role::create(['name' => 'mkt']);
        $ecmRole = Role::create(['name' => 'ecm']);
        $bdrndRole = Role::create(['name' => 'bdrnd']);
        $cncRole = Role::create(['name' => 'cnc']);
        $wrhsRole = Role::create(['name' => 'wrhs']);
        $qcsRole = Role::create(['name' => 'qcs']);
        $qcpRole = Role::create(['name' => 'qcp']);
        $qaRole = Role::create(['name' => 'qa']);
        $mtRole = Role::create(['name' => 'mt']);
        $protechRole = Role::create(['name' => 'protech']);
        $farmRole = Role::create(['name' => 'farm']);
        $financeRole = Role::create(['name' => 'finance']);
        $exportRole = Role::create(['name' => 'export']);
        $purchaseRole = Role::create(['name' => 'purchase']);

        // Berikan permissions ke roles
        $adminRole->givePermissionTo('create data', 'view data', 'update data', 'delete data');
        $userRole->givePermissionTo('view data', 'update data');

        // Buat user dan berikan roles yang sesuai dengan divisi mereka
        $userAdmin = User::create([
            'name' => 'Roofi',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'),
        ]);
        $userAdmin->assignRole('admin');

<<<<<<< HEAD
        $user = User::create([
            'name' => 'Anak Agung Raka Bagus Vinaya',
            'email' => 'raka@mail.com',
            'password' => bcrypt('admin123'),
        ]);
        $user->assignRole('admin');

        $regularUser = User::create([
=======
        $userGalih = User::create([
>>>>>>> test-commit
            'name' => 'Galih',
            'email' => 'galih@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'prd')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userGalih->assignRole('prd'); // Berikan role 'prd'

        $userChotyHr = User::create([
            'name' => 'choty',
            'email' => 'choty@hr.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'hr')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userChotyHr->assignRole('hr'); // Berikan role 'hr'

        $userChotyGa = User::create([
            'name' => 'choty',
            'email' => 'choty@ga.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'ga')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userChotyGa->assignRole('ga'); // Berikan role 'ga'

        $userFrida = User::create([
            'name' => 'Frida',
            'email' => 'frida@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'mkt')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userFrida->assignRole('mkt'); // Berikan role 'mkt'

        $userMaulin = User::create([
            'name' => 'Maulin',
            'email' => 'maulin@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'ecm')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userMaulin->assignRole('ecm'); // Berikan role 'ecm'

        $userNisomBdrnd = User::create([
            'name' => 'Nisom',
            'email' => 'nisom@bdrnd.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'bdrnd')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userNisomBdrnd->assignRole('bdrnd'); // Berikan role 'bdrnd'

        $userYhunis = User::create([
            'name' => 'Yhunis',
            'email' => 'yhunis@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'cnc')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userYhunis->assignRole('cnc'); // Berikan role 'cnc'

        $userHangga = User::create([
            'name' => 'Hangga',
            'email' => 'hangga@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'wrhs')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userHangga->assignRole('wrhs'); // Berikan role 'wrhs'

        $userShokibi = User::create([
            'name' => 'Shokibi',
            'email' => 'kibi@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'qcs')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userShokibi->assignRole('qcs'); // Berikan role 'qcs'

        $userNisomQcp = User::create([
            'name' => 'Nisom',
            'email' => 'nisom@qcp.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'qcp')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userNisomQcp->assignRole('qcp'); // Berikan role 'qcp'

        $userAle = User::create([
            'name' => 'Ale',
            'email' => 'ale@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'qa')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userAle->assignRole('qa'); // Berikan role 'qa'

        $userKhopid = User::create([
            'name' => 'Khopid',
            'email' => 'khopid@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'mt')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userKhopid->assignRole('mt'); // Berikan role 'mt'

        $userWinartoProtech = User::create([
            'name' => 'Winarto',
            'email' => 'winarto@protech.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'protech')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userWinartoProtech->assignRole('protech'); // Berikan role 'protech'

        $userWinartoFarm = User::create([
            'name' => 'Winarto',
            'email' => 'winarto@farm.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'farm')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userWinartoFarm->assignRole('farm'); // Berikan role 'farm'

        $userFarid = User::create([
            'name' => 'Farid',
            'email' => 'farid@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'finance')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userFarid->assignRole('finance'); // Berikan role 'finance'

        $userNizar = User::create([
            'name' => 'Nizar',
            'email' => 'nizar@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'purchase')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userNizar->assignRole('purchase'); // Berikan role 'purchase'

        $userKennet = User::create([
            'name' => 'Kennet',
            'email' => 'ken@mail.com',
            'password' => bcrypt('user123'),
            'division_id' => Division::where('name', 'export')->first()->id ?? null, // Sesuaikan dengan nama divisi yang benar
        ]);
        $userKennet->assignRole('export'); // Berikan role 'export'
    }
}