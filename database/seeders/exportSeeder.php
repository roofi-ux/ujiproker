<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class exportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exports')->insert([
            [
                'proker' => 'Prospek order baru setiap bulan dari buyer existing & potential ',
                'renker' => 'Prospek buyer rutin order; prospek buyer potensial; support buyer untuk order seperti marketing tools, kemasan, dll',
                'target' => 'Order Eskpor Bulanan',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Prospek buyer baru setiap bulan dari berbagai channel',
                'renker' => 'Prospek buyer baru setiap bulan dari beberapa channel : exhibition ; email ; whatsapp ; database baru dari beberapa sources, serta provide sample untuk buyer potensial.',
                'target' => 'Buyer baru setiap bulan dan mendapatkan order ekspor baru.',
                'janw1' => 'OK',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Partisipasi Kurasi Ekspor dari beberapa instansi penyelenggara terkait	',
                'renker' => 'Berpartisipasi dalam kurasi produk ekspor untuk misi dagang / event exhibition luar negeri yang diselenggarakan oleh beberapa instansi terkait seperti Kementerian Perdagangan dan lainnya, instansi provinsi, dll',
                'target' => 'Lolos Kurasi & berpartisipasi di exhibition International',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => '',
            ],
            [
                'proker' => 'Business Matching Bulanan oleh Instansi terkait',
                'renker' => 'Mengikuti Business Matching dengan beberapa instansi seperti Kementerian Perdagangan (ITPC & Atdag) dan instansi terkait lainnya.',
                'target' => 'Mendapatkan informasi buyer untuk pasar ekspor',
                'janw1' => '',
                'janw2' => 'OK',
                'janw3' => 'OK',
                'janw4' => '',
            ],
        ]);
    }
}
