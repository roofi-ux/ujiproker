<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class prdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prds')->insert
        ([
                'proker' => 'Peningakatan kapasitas produksi cookies BM & PB dari kapasitas 6.000 pcs /day menjadi 18.000 pcs /day',
                'renker' => 'Penambahan Oven Pengering Rotary dan Trolley',
                'target' => 'Forecast BM & PB ditahun 2025 sebanyak 511.543 pcs. Kebutuhan tenaga kerja line cookies /day sebanyak 24 opr  Hasil produksi /day 6.000 pcs maka membutuhkan 85 hari kerja dengan value total tenaga kerja Rp 245.540.640
                                Sedangkan jika hasil produksi naik menjadi 18.000 /day maka membutuhkan 28 hari kerja dengan value total tenaga kerja Rp 81.846.880. Maka penghematan yang didapatkan dari kenaikan kapasitas tersebut adalah Rp 163.693.760 Oven pengering cookies akan siap digunakan di bulan Januari W2',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
               
            ]);
    }
}
