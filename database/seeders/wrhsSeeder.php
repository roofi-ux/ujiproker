<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class wrhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wrhs')->insert([
            [
                'proker' => 'Penambahan Kapasitas Barang Jadi menjadi 2 lantai',
                'renker' => 'Kordinasi dengan tim Protect dan Purchasing terkait bahan - bahan yang di perlukan serta timeline pengerjaan untuk improvement kapasitas gudang barang jadi.',
                'target' => 'Peningkatan kapasitas barang jadi dari 44 palet mejadi 98 palet.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Penambahan Kapasitas Barang Jadi menjadi 2 lantai',
                'renker' => 'Penataan dan pemindahan sementara semua barang di Gudang Jadi di area transit produksi dan area gudang RMPM selama proses perbaikan oleh tim Protect.',
                'target' => 'Peningkatan kapasitas barang jadi dari 44 palet mejadi 98 palet.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Penambahan Kapasitas Barang Jadi menjadi 2 lantai',
                'renker' => 'Kordinasi dengan tim HRGA untuk penambahan lampu di gudang barang jadi pada lantai 1.',
                'target' => 'Peningkatan kapasitas barang jadi dari 44 palet mejadi 98 palet.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penambahan Kapasitas Barang Jadi menjadi 2 lantai',
                'renker' => 'Pembuatan Layout & penataan ulang Gudang Finish Good setelah proses pengerjaan selesai.',
                'target' => 'Peningkatan kapasitas barang jadi dari 44 palet mejadi 98 palet.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Penambahan Kapasitas Barang Jadi menjadi 2 lantai',
                'renker' => 'Modifikasi lift barang (Disesuaikan dengan dimensi palet)',
                'target' => 'Peningkatan kapasitas barang jadi dari 44 palet mejadi 98 palet.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Perbaikan SOP Warehouse',
                'renker' => 'Revisi SOP Warehouse dari proses penerimaan dan pengeluaran stock finisih good dan RMPM',
                'target' => 'Menjamin stock finisih good dan RMPM setelah proses penerimaan hingga pengeluaran sesuai stock sistem accuratte dengan accuracy 100 %',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Maintanace Handpalet Manual',
                'renker' => 'Kordinasi dengan tim MTC untuk jadwal maintanance handpalet.',
                'target' => 'Menunjang kinerja tim Warehouse dengan memastikan handpalet dalam keadaan prima 80%',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Maintanace Handpalet Manual',
                'renker' => 'Order Sparepart Handpalet dan kordinasi dengan tim purchasing dan MTC untuk pengadaannya.',
                'target' => 'Menunjang kinerja tim Warehouse dengan memastikan handpalet dalam keadaan prima 80%',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Menurunkan DOI stock Bahan Baku & Kemas dengan target 60 hari.',
                'renker' => 'Penarikan data dan analisa untuk stock - stock dengan DOI diatas 60 hari.',
                'target' => 'DOI Bahan Baku dan Kemas mecapai maksimal 60 hari.',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Menurunkan DOI stock Bahan Baku & Kemas dengan target 60 hari.',
                'renker' => 'Penarikan data dan analisa untuk stock - stock dengan DOI diatas 60 hari.',
                'target' => 'DOI Bahan Baku dan Kemas mecapai maksimal 60 hari.',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Menurunkan DOI stock Bahan Baku & Kemas dengan target 60 hari.',
                'renker' => 'Kordinasi dengan divisi - divisi terkait untuk menentukan action stock bahan baku dan kemas yang DOI-nya diatas 60 hari harus segera di FU agar DOI bisa mencapai target sebesar 60 hari.',
                'target' => 'DOI Bahan Baku dan Kemas mecapai maksimal 60 hari.',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Menurunkan DOI stock Bahan Baku & Kemas dengan target 60 hari.',
                'renker' => 'Monitoring  perhitungan PPIC dalam menentukan jumlah MRP setiap bulannya.',
                'target' => 'DOI Bahan Baku dan Kemas mecapai maksimal 60 hari.',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Perbaikan stock opname dengan memastikan tidak ada selisih di kode batch produk baik di bahan baku & kemas & bahan jadi di Gudang SIER dan Pasuruan.',
                'renker' => 'Kordinasi dengan tim finance untuk melakukan perhitungan stock opname dengan kode batch serta perbaikan dari selisih akumulasi kode batch dari tahun - tahun sebelumnya',
                'target' => 'Stock accuracy mencapai 100 % baik kuantitas dan kode batch produk.',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
        ]);
    }
}
