<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class purchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchases')->insert([
            [
                'proker' => 'Evaluasi Supplier',
                'renker' => '1. Team Procurement menerima data rekap/komplain Supplier dari team QA/QC (Setiap akhir bulan)',
                'target' => 'Setiap bulan sudah konsisten untuk membuat penilaian supplier. Jumlah Supplier yang dilakukan evaluasi tergantung case/komplain di lapangan. Dokumen evaluasi supplier tercatat sesuai SOP yang berlaku, sehingga hasil penilaiannya lebih konkrit dan bisa digunakan untuk mengetahui supplier yang baik dan tidak baik.',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Evaluasi Supplier',
                'renker' => '2. Team Procurement melakukan collect data dengan divisi Warehouse terkait kesesuaian penerimaan barang, (Terkait qty, dan ketepatan pengiriman PO)',
                'target' => 'Setiap bulan sudah konsisten untuk membuat penilaian supplier. Jumlah Supplier yang dilakukan evaluasi tergantung case/komplain di lapangan. Dokumen evaluasi supplier tercatat sesuai SOP yang berlaku, sehingga hasil penilaiannya lebih konkrit dan bisa digunakan untuk mengetahui supplier yang baik dan tidak baik.',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Evaluasi Supplier',
                'renker' => '3. Team Procurement melakukan collect data dari team QA/QC, dan Warehouse untuk dituangkan dalam 1 form yang dilakukan setiap bulan dan dirangkum setiap 4-6 bulan',
                'target' => 'Setiap bulan sudah konsisten untuk membuat penilaian supplier. Jumlah Supplier yang dilakukan evaluasi tergantung case/komplain di lapangan. Dokumen evaluasi supplier tercatat sesuai SOP yang berlaku, sehingga hasil penilaiannya lebih konkrit dan bisa digunakan untuk mengetahui supplier yang baik dan tidak baik.',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
          
        ]);
    }
}
