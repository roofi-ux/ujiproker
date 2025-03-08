<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ecmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ecms')->insert([
            [
                'proker' => 'Multi Warehouse Tokopedia',
                'renker' => 'Mengoptimasikan Gudang Surabaya dan Bali Pengiriman Under Official Tokopedia',
                'target' => 'Meningkatkan kontribusi penjualan di tokopedia hingga 300.000.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Multi Warehouse Shopee	',
                'renker' => 'Mengoptimasikan Gudang Surabaya dan Bali Pengiriman Under Official Shopee',
                'target' => 'Meningkatkan kontribusi penjualan di tokopedia hingga 1.000.000.000',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Campaign Seller Center	',
                'renker' => 'Mengoptimalkan semua campaign yang ada di seller center terkait campaign peak day, payday, flash sale di seller center',
                'target' => 'Mendapatkan exposure tambahan untuk meningkatkan penjualan di setiap platform agar mencapai target yang sudah ditentukan',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Optimasi Collaboration Brand',
                'renker' => 'Program Bundling Collaboration setiap bulan dan support Voucher',
                'target' => 'Target 2 brand/bulan dan mencapai target penjualan setiap bundling',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Launching New Product',
                'renker' => 'NPL exclusive di e-commerce.',
                'target' => 'Penambahan SKU baru = Potensi besar penambahan revenue.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Optimasi Program Affiliate E-commerce',
                'renker' => 'Program Affiliate Live, Program Affiliate Launching Product, Program Affiliate Creator, workshop product knowlegde',
                'target' => 'Target maintance community affiliate 100 shopee dan 100 tiktok',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Peningkatan fungsi CS dan handling komplain.',
                'renker' => 'Penerbitan SOP, case study, menintegrasikan channel chat di platform ke dalam satu aplikasi/omnichannel',
                'target' => '"Meningkatkan standar service level:
 Fast & accurate CS response dan meminimalisir komplain. Serta dengan adanya aplikasi omnichannel untuk chat ini bisa mempermudah untuk membalas chat serta menghemat waktu"',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
        ]);
    }
}
