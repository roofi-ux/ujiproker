<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class cncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cncs')->insert([
            [
                'proker' => 'PROGRAM SEMESTER 1	',
                'renker' => 'BELANJA UNDIAN LIBURAN',
                'target' => '600,000,000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ], [
                'proker' => 'PROGRAM KUARTAL 1',
                'renker' => 'KEJAR THR CASHBACK 3%',
                'target' => '1,000,000,000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ], [
                'proker' => 'PROMO IMLEK',
                'renker' => 'PUMPBERRY MINI FREE MERCHANDISE',
                'target' => 'MINIMAL 40 KARTON TERJUAL',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ], [
                'proker' => 'PROJECT PAKET KHUSUS MITRA SEHAT',
                'renker' => 'KOREAN FREE CONTAINER BOX',
                'target' => 'MINIMAL 600 PAKET TERJUAL',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ], [
                'proker' => 'KUNJUNGAN MITRA SEHAT JAKARTA',
                'renker' => 'PENAWARAN PROGRAM SEMESTER & KUARTAL 1',
                'target' => 'TARGET 20 SKP',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ], [
                'proker' => 'KUNJUNGAN MITRA SEHAT SURABAYA	',
                'renker' => 'PENAWARAN PROGRAM SEMESTER & KUARTAL 1',
                'target' => 'TARGET 10 SKP',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ],
        ]);
    }
}
