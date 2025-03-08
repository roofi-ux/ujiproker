<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class qcpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mkts')->insert([
            [
                'proker' => 'Monitoring proses pada setiap tahapan produksi',
                'renker' => 'Peningkatan intensitas Inspeksi dan monitoring proses pada setiap tahapan produksi dari setiap 2 jam menjadi setiap jam',
                'target' => 'meminimalkan/pencegahan lebih dini potensi ketidaksesuaian kualitas produk hasil produksi',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengujian kualitas produk akhir',
                'renker' => 'Penambahan pengujian kadar Abu tepung mocaf ',
                'target' => 'Mengetahui Kandungan mineral yang bersifat toksik pada produk terdeteksi',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengujian kualitas produk akhir',
                'renker' => 'Pelaksanaan pengujian grading test menggunakan Retsch',
                'target' => 'kualitas kehalusan mesh 100 tepung mocaf terjaga secara konsisten',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengujian kualitas produk akhir',
                'renker' => 'Penambahan alat pengamatan untuk uji organoleptik warna tepung mocaf',
                'target' => 'Penentuan kategori warna tepung mocaf secara valid',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Peningkatan akurasi alat timbang di area produksi ',
                'renker' => 'melakukan pemantauan secara rutin dengan melakukan kalibrasi alat timbang secara internal',
                'target' => '- Hasil penimbangan formula produk sesuai dengan formula yang ditentukan
                - Meminimalkan potensi lost bahan baku karena ketidakstabilan timbangan
                - Posisi alat timbang tidah berpindah - pindah tempat
                - Konsistensi berat netto produk saat dikemas',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengembangan dan perbaikan SOP proses produksi',
                'renker' => 'Perubahan dan validasi SOP proses produksi tepung Mocaf pada setiap tahapan proses',
                'target' => 'SOP produksi tepung mocaf tervalidasi dan bisa diterapkan',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengembangan dan perbaikan SOP proses produksi',
                'renker' => 'SOP proses produksi tepung premix brownies',
                'target' => 'homogenitas premix tepung brownies pada saat proses mixing',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Evaluasi SOP Pengujian / prosedur analisa',
                'renker' => 'Pembuatan & validasi prosedur analisa peralatan uji baru ',
                'target' => 'Prosedur analisa kadar abu',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Evaluasi SOP Pengujian / prosedur analisa',
                'renker' => 'Perbaikan & validasi prosedur analisa peralatan uji existing',
                'target' => 'penerapan prosedur pengujian produk dengan menghasilkan hasil uji yang valid',
                'janw1' => ' ',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Meminimalkan potensi bahaya pangan pada tepung mocaf',
                'renker' => 'Melakukan penambahan sistem treatment air  sebelum digunakan proses produksi',
                'target' => 'air yang digunakan proses produksi sesuai dengan standart air baku',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Ruang & peralatan untuk pengujian mikrobiologi',
                'renker' => 'Pengadaan peralatan uji cemaran microbiologi pada produk ',
                'target' => 'Pengujian cemaran mikrobiologi pada produk secara internal ',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'efisiensi waktu dan tenaga saat pengecekan kadar gluten',
                'renker' => 'pengadaan tube shaker untuk homogenisasi sample uji ',
                'target' => 'sampel uji lebih homogen secara mekanis',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Upgrade skill PIC QC',
                'renker' => 'Melakukan pelatihan internal refresh prosedur analisa metode uji existing, Food safety management (GMP, HACCP, CPPOB) , HALAL & methode analisa peralatan uji baru',
                'target' => 'Peningkatan kompetensi pengujian dan monitoring produk jadi lebih baik dan lebih cepat',
                'janw1' => 'OK',
                'janw2' => '',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Upgrade skill PIC QC',
                'renker' => 'Briefing internal QC staff ke QC analyst ( Harian & Mingguan )',
                'target' => 'Peningkatan kompetensi pengujian dan monitoring produk jadi lebih baik dan lebih cepat',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Upgrade skill PIC QC',
                'renker' => 'Melakukan record case man power QC untuk diperbaiki Meminimalkan potensi kesalahan  serta perbaikan',
                'target' => 'meningkatkan kinerja / performa QC analyst',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => '',
                'janw4' => '',
            ],
            [
                'proker' => 'Evaluasi bulanan tentang performa peralatan uji',
                'renker' => 'internal audit bulanan  untuk memastikan jumlah dan kondisi asset peralatan uji masih layak digunakan',
                'target' => 'Alat uji siap digunakan',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Dokumentasi temuan ketidaksesuaian dan tindakan perbaikan',
                'renker' => 'Pencatatan setiap temuan dari inspeksi dan monitoring proses',
                'target' => 'Kemudahan dan kecepatan untuk melakukan tindakan perbaikan',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pembuatan laporan kualitas produk secara lebih detail',
                'renker' => 'Perbaikan cek sheet monitoring kualitas produk disesuaikan dengan kebutuhan cek yang lebih terperinci ',
                'target' => 'mengantisipasi terjadinya ketidaksesuaian pada setiap tahapan proses',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Pengarsipan dokumen secara rapi',
                'renker' => 'Pengaturan penyimpanan dokumen per lot number dilakukan setiap bulan pada setiap produk ',
                'target' => 'kemudahan identifikasi saat melakukan traceability produk',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Pengarsipan dokumen secara rapi',
                'renker' => 'Pemeliharaan arsip dokumen secara digital dan fisik',
                'target' => 'kemudahan identifikasi saat melakukan traceability produk',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],

        ]);
    }
}
