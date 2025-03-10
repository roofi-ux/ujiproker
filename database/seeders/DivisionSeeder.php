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
            ['name' => 'prd'],
            ['name' => 'hr'],
            ['name' => 'ga'],
            ['name' => 'mkt'],
            ['name' => 'ecm'],
            ['name' => 'bdrnd'],
            ['name' => 'cnc'],
            ['name' => 'wrhs'],
            ['name' => 'qcs'],
            ['name' => 'qcp'],
            ['name' => 'qa'],
            ['name' => 'mt'],
            ['name' => 'protech'],
            ['name' => 'farm'],
            ['name' => 'finance'],
            ['name' => 'purchase'],
            ['name' => 'export'],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}