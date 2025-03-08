<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class farmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('farms')->insert([
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'sosialisasi dan segementasi penentuan target goal penanaman',
                'target' => 'petani / Pengusaha	10 Ha',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'sosialisasi dan segementasi penentuan target goal penanaman',
                'target' => 'Pemilih lahan kosong 30 Ha',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'sosialisasi dan segementasi penentuan target goal penanaman',
                'target' => 'ASN / Pekerja / dan pejabat 16 Ha',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk kandang',
                'target' => 'kebutuhan pupuk kandang (sak)	200',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk kandang',
                'target' => 'harga /ha	Rp2.000.000',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk kandang',
                'target' => 'Kebutuhan Pupuk untuk 56 ha	Rp112.000.000',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk cair',
                'target' => 'kebutuhan pupuk cair /ha (jerigen 20 liter)	3',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk cair',
                'target' => 'harga /ha	Rp4.500.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penanaman singkong seluas 56 HA',
                'renker' => 'Pupuk cair',
                'target' => 'Kebutuhan pupuk cair untuk 56 ha	Rp252.000.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Riset',
                'renker' => 'Riset pupuk Biochar (1 ha)',
                'target' => 'Tenaga kerja/hari	Rp50.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Riset',
                'renker' => 'Riset pupuk Biochar (1 ha)',
                'target' => 'Solar/liter	Rp10.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Riset',
                'renker' => 'Riset pupuk Biochar (1 ha)',
                'target' => 'Solar traktor (1 ha)	Rp800.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Traktor',
                'renker' => '"Traktor semester 1 (26 ha)."',
                'target' => 'Pengerjaan traktor secara bertahap dengan target selesai bulan juni',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penambahan alat pertanian',
                'renker' => 'Riset pupuk Biochar (1 ha)',
                'target' => 'Solar traktor (1 ha)	Rp800.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penambahan alat pertanian',
                'renker' => 'Modifikasi traktor',
                'target' => 'Pembuatan roda besi',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
        ]);
    }
}
