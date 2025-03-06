<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class bdRndSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bd_rnds')->insert([
            [
                'proker' => 'Trail Mix',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W4 Januari',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Mi Soto Lamongan',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W4 Februari',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Fruit Snackers',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W2 Maret',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Blackmond Sugar Free',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W2 April',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Low Sugar Fruitthins',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W4 April',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Crackers Ubi',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W4 Juni',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pasta with Sauce',
                'renker' => 'Riset produk baru',
                'target' => 'Launching W4 Juli',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Tepung Pisang Goreng',
                'renker' => 'Mengurangi minyak berlebih setelah digoreng',
                'target' => 'Produksi dengan formula baru di W4 Maret',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Spagetthi',
                'renker' => 'Mengurangi warna dan aroma turmeric',
                'target' => 'Produksi dengan formula baru di W2 April',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Tepung Mocaf',
                'renker' => 'Reduce cost & memperbaiki kualitas',
                'target' => 'November 2025',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'All cookies ',
                'renker' => 'Organoleptik stabil hingga masa simpan habis',
                'target' => 'November 2025',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Blackmond',
                'renker' => 'Blackmond tanpa margarine (Bisa masuk pasar export karena dibeberapa negara tidak bisa menerima margarine)',
                'target' => 'Mei 2025',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Rice Crunch',
                'renker' => 'Penambahan shelf life dan mengurangi bau apek beras',
                'target' => 'W4 Maret',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Rice Crunch',
                'renker' => 'Added value dengan penambahan biji-bijian atau multigrain',
                'target' => 'untuk Launching di 2026',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Sticker to printing packaging',
                'renker' => 'Perubahan penggunaan stiker menjadi printing/sablon packaging',
                'target' => 'Launching W4 Februari',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Branding & Resize carton box',
                'renker' => '"Perubahan design karton box dengan branding (penampilan sertifikasi dan USP Produk)
Penyesuaian dimensi kemasan berdasarkan jumlah item produk yang berjumlah 24 pcs dengan penataan yang lebih safety dan kemudahan kontrol saat kegiatan operasional"',
                'target' => 'Launching W1 Maret',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Packaging Cookies Export',
                'renker' => 'Pembuatan design all cookies export',
                'target' => 'Launching W4 Maret',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Perubahan Desain Packaging yang Lebih Minimalis',
                'renker' => 'Perubahan design all packaging cookies dengan menampilkan beberapa keunggulan produk yang lebih banyak dibutuhkan/menjadi concern oleh customer',
                'target' => 'Launching W1 April',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Blackmond 33 gr x 24 pcs',
                'renker' => 'Pengadaan packaging outer box untuk Blackmond 33 gr isi 24 pcs',
                'target' => 'untuk Launching di 2026',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Hampers Lebaran',
                'renker' => 'Hampers dengan new product lidah kucing, sandwich nastar, kaastengel, klepon cookies',
                'target' => 'Penjualan hampers dengan produk festive/baru terjual total 300 paket',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],

        ]);
    }
}
