<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class gaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gas')->insert([
            [
                'proker' => 'PEMENUHAN SARANA & PRASARANA',
                'renker' => 'Fasilitas Seragam kerja, a. Pengajuan pengadaan seragam kerja dan ID card ke managemen ( untuk semua karyawan dan stock untuk karyawan baru ) Karyawan baru maksimal 3 bulan wajib punya seragam, b. Pengadaan seragam dan ID card',
                'target' => 'Loyalitas dan branding perusahaan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'PEMENUHAN SARANA & PRASARANA',
                'renker' => 'Pemeliharaan Gedung, a. Melakukan Kunjungan ke all Plant , dari 1 bulan sekali menjadi 2 kali ( offline / online )',
                'target' => 'Kondisi building tetap terawat baik',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'PEMENUHAN SARANA & PRASARANA',
                'renker' => 'Perbaikan Bangunan kantor KTT, a. Membuat RAB perbaikan atap talang, plafon dan pengecatan area gudang',
                'target' => 'bangunan kantor Ketintang terjaga kemanan dan kebersihan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'MEMASTIKAN K3 LINGKUNGAN',
                'renker' => '1. Pembentukan team K3 lingkungan',
                'target' => 'Memastikan lingkunngan bersih dan limbah tertangani',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Peningkatan disiplin karyawan',
                'renker' => 'Memperbaiki tingkat disiplin dari rate 20 % menjadi 0-5 %, Membuat aturan punish and reward yang sesuai, Sosialisasi aturan kedisiplinan',
                'target' => 'Kedisiplinan karyawan tercapai di 0 - 5 % keterlambatan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'PERIJINAN NEW PLANT',
                'renker' => 'Memastikan Zonasi, PPJB, PERTEK',
                'target' => 'Ijin KRK bisa terbit, Pajak BPHTB max. 190 - 200 jt, SK Pertek selesai W 4 ( note pembayaran selesai )',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'PERIJINAN NEW PLANT',
                'renker' => 'NIB, KBLI ( skala resiko usaha rendah / sedang / tinggi ), K3 L, Pernyataan Tata Ruang, SPPL',
                'target' => 'Ijin usaha sudah tertanam di titik lokasi baru',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'PERIJINAN NEW PLANT',
                'renker' => 'KRK',
                'target' => 'SK KRK sudah di dapat',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
        ]);
    }
}
