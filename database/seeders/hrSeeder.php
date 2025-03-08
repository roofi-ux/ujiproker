<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class hrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hrs')->insert([
            [
                'proker' => 'Revisi Struktur Organisasi',
                'renker' => 'perbaikan All Divisi ',
                'target' => 'legalitas struktural & kejelasan alur koordinasi ',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Revisi & Sosialisasi SOP & JobDesc & KPI',
                'renker' => 'perbaikan All Divisi',
                'target' => 'Kejelasan tugas karyawan ',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Controling Team Sales & Marketing ',
                'renker' => 'Weekly Sales (update target /sales)',
                'target' => 'Agar bisa mengetahui target pencapain setiap Sales & MT (SPG dan SMD)',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Controling Team Farm ',
                'renker' => '* Random Cek activity',
                'target' => 'Agar bisa mengetahui target pencapain setiap Sales & MT (SPG dan SMD)',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Healty life Style ',
                'renker' => 'Olahraga dengan PIC / Divisi',
                'target' => 'Bonding Karyawan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Training Internal',
                'renker' => '* Training di isi oleh Internal LSI',
                'target' => 'Pengembangan kemampuan karyawan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penilaian Kinerja Karyawan',
                'renker' => '* Pengisian Form penilaian (dinilai setiap 3 bulan sekali secara 360)',
                'target' => 'untuk mengetahui kemampuan karyawan ',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Payroll & Rekap Absensi',
                'renker' => '* Cek Keterlambatan & Efisiensi kerja ',
                'target' => 'Produktivitas karyawan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Recruitment',
                'renker' => '* Hiring kandidat melalui internal LSI,  portal, flayer, rekanan',
                'target' => 'Pemenuhan kebutuhan MPP setiap Divisi ',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Cek All Team (HRGA Blusukan)',
                'renker' => '* Kunjungan ke setiap Divisi',
                'target' => 'karyawan off & Lembur',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Coaching Karyawan ',
                'renker' => '* Kopdar HRGA',
                'target' => 'Menjalin hubungan emosional dengan karyawan',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Digitalisasi ',
                'renker' => '* Penilaian kinerja karyawan, MPP',
                'target' => 'Penilaian agar lebih mudah dan cepat',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Digitalisasi ',
                'renker' => '* Evaluasi Program Kerja ',
                'target' => '',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Efisiensi Karyawan',
                'renker' => '* perbaikan Kontrak (disesuaika)',
                'target' => '',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Audit 5R',
                'renker' => '* Kunjungan tiap Bulan (Random Audit)',
                'target' => '90% penilaian 5R tercapai',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ]
        ]);
    }
}
