<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['name' => 'Divisi prd'],
            ['name' => 'Divisi hr'],
            ['name' => 'Divisi ga'],
            ['name' => 'Divisi mkt'],
            ['name' => 'Divisi ecm'],
            ['name' => 'Divisi bdrnd'],
            ['name' => 'Divisi cnc'],
            ['name' => 'Divisi wrhs'],
            ['name' => 'Divisi qcs'],
            ['name' => 'Divisi qcp'],
            ['name' => 'Divisi qa'],
            ['name' => 'Divisi mt'],
            ['name' => 'Divisi protech'],
            ['name' => 'Divisi farm'],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}