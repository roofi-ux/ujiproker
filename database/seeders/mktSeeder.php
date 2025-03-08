<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class mktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mkts')->insert([
            [
                'proker' => 'Program Reseller',
                'renker' => '"- Gimmick - Gathering/Kopdar - Bazaar & Events - Cassava to Table"',
                'target' => '',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Program Ecommerce',
                'renker' => '"- Paket bundling gimmick merch - Brand Collaborations - Affiliate - Voucher KOL & Community"',
                'target' => '"- target tiap bulan ada bundling gimmick - tiap produk baru free produk dari brand collaboration - 80-100 campaing untuk affiliate - voucher belanja untuk support event yang tidak open booth dan untuk KOL"',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
            [
                'proker' => '"Program Modern Trade - Store Kontribusi 48%"',
                'renker' => '"- SPG sampling cookies dan cooking di toko - free gimmick merchandise - Branding di toko: end gondola, dumbin, wobbler - event di toko: sports, cooking demo - Bundling free produk - Loyalty end customern"',
                'target' => '',
                'janw1' => '',
                'janw2' => '',
                'janw3' => 'OK',
                'janw4' => 'OK',
            ],
            [
                'proker' => 'Partnership Brand',
                'renker' => '- total minim 2 brand per bulan',
                'target' => '"- Brand collabs Garuda Indonesia - Soursally - Home & Cookware - Oxone - Hotel"',
                'janw1' => '',
                'janw2' => '',
                'janw3' => '',
                'janw4' => 'OK',
            ],
        ]);
    }
}
