<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class qaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qas')->insert([
            [
                'proker' => 'Document Control (Dokumen & Rekaman)',
                'renker' => 'Sosialisasi SOP Pengendalian Dokumen dan Rekaman ke all Departemen terkait dan distribusi template baru untuk dokumen dan rekaman',
                'target' => 'Prosedur pengendalian dokumen dan rekaman sudah disosialisasikan ke all PIC departemen PT Ladang Sehat Indonesia',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Pencarian vendor sertifikasi HACCP dan penawaran harganya',
                'target' => 'Minimal 2 penawaran lembaga sertifikasi yang diakui secara Internasional (BSI & SGS)',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Penetapan tim mutu dan keamanan pangan baik untuk plant SBY maupun PSN',
                'target' => 'Implementasi penerapan sistem manajemen quality dan keamanan pangan dapat berjalan dengan baik dan termonitoring',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Pengajuan penawaran harga sertifikasi HACCP plant SBY ke manajemen',
                'target' => '2 penawaran lembaga sertifikasi HACCP diajukan ke manajemen beserta Rincian Anggaran Biaya pelaksanaannya',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Pembuatan dokumen manual HACCP untuk plant Surabaya',
                'target' => 'Manual HACCP Produk Cookies (all cookies) sudah tersedia',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Review Quality & Food Safety Manajemen System Plant Surabaya',
                'target' => '1. Manual Mutu ISO 9001:2015 plant Surabaya dilakukan update setiap 2 bulan sekali2. Manual HACPP plant Surabayadilakukan update setiap 2 bulan sekali',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Quality & Food Safety Management System',
                'renker' => 'Review Quality &  Food Safety Manajemen System Plant Pasuruan',
                'target' => '1. Manual Mutu ISO 9001:2015 plant Pasuruan dilakukan update setiap 2 bulan sekali2. Manual HACPP plant Pasuruan dilakukan update setiap 2 bulan sekali',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Sertifikasi GFCO',
                'renker' => 'Pembuatan Program Bebas Gluten ',
                'target' => 'Program kerja di review min. 1 tahun sekali',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Sertifikasi GFCO',
                'renker' => 'Update ketersediaan gluten test kits dan pengujian bahan dan produk ke tim QC Pasuruan',
                'target' => 'Pengujian produk yang wajib di kirimkan ke pihak GFCO dilakukan setiap 3 bulan sekali (Januari, April, Juli & Oktober)',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Handling Customer Complain',
                'renker' => 'Pencatatan dan analisa trend customer complain tiap minggu',
                'target' => 'Zero Complaint',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Handling Customer Complain',
                'renker' => 'Pencatatan tindakan koreksi dan perbaikan yang dilakukan',
                'target' => 'Setiap 1 bulan sekali  tindakan koreksi dan perbaikan yang telah dilakukan di review',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Kalibrasi Alat Ukur & Alat Uji',
                'renker' => 'Pembuatan program kalibrasi eksternal dan internal',
                'target' => 'Alat ukur dan alat uji yang digunakan terkalibrasi eksternal 1 tahun sekali dan dilakukan verifikasi alat ukur setiap 1 minggu sekali',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Allergen Management',
                'renker' => 'Pembuatan Allergen Management Tepung Mocaf',
                'target' => 'Allergen management produk tepung mocaf selesai di Januari 2025',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Halal Material update',
                'renker' => 'Updating dokumen halal material dan packaging dari departemen Purchase',
                'target' => 'Setiap awal bulan cek update dokumen halal material agar tidak ada bahan baku dengan status masa berlaku halal sudah habis',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Audit Internal & Eksternal',
                'renker' => 'Audit Internal HACCP',
                'target' => 'Allergen management produk tepung mocaf selesai di Januari 2025',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Audit Internal & Eksternal',
                'renker' => 'Audit Eksternal HACCP Tepung Mocaf',
                'target' => 'Allergen management produk tepung mocaf selesai di Januari 2025',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Pengujian Eksternal Produk',
                'renker' => 'Pembuatan jadwal pengujian eksternal produk Ladang Lima',
                'target' => 'Jadwal pengujian eksternal setiap awal bulan untuk produk Ladang Lima min. 2 produk exsisting',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Pengujian Eksternal Produk',
                'renker' => 'Pengajuan pengujian ke pihak lembaga pengujian terkait',
                'target' => 'Pengajuan ke pihak laboratorium dilakukan min. 1 minggu sebelum bulan berikutnya',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Pengujian Eksternal Produk',
                'renker' => 'Pengajuan pengujian ke manajemen di sertai dengan penawaran dari vendor',
                'target' => 'Manajemen approval terkait pengujian produk exsisting min. 2 produk',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Pengujian Eksternal Produk',
                'renker' => 'Pengujian Produk',
                'target' => 'Estimasi lama waktu pengujian produk 14 hari kerja di Laboratorium',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengujian Eksternal Produk',
                'renker' => 'Collecting dokumen pengujian eksternal produk',
                'target' => 'Update dokumen pengujian 1 bulan sekali',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Training Food Safety',
                'renker' => 'Pembuatan jadwal training internal food safety tahun 2025',
                'target' => 'Training internal dilakukan 3 bulan sekali',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Training Food Safety',
                'renker' => 'Pengajuan jadwal training internal food safety ke HRGA',
                'target' => 'Jadwal training internal QA sudah di kirimkan ke HRGA akhir Januari 2025',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
        ]);
    }
}
