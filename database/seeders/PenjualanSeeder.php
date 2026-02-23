<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'PNJ001', 'penjualan_tanggal' => '2026-02-01 10:00:00'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Siti', 'penjualan_kode' => 'PNJ002', 'penjualan_tanggal' => '2026-02-02 11:00:00'],
            ['penjualan_id' => 3, 'user_id' => 2, 'pembeli' => 'Andi', 'penjualan_kode' => 'PNJ003', 'penjualan_tanggal' => '2026-02-03 12:00:00'],
            ['penjualan_id' => 4, 'user_id' => 2, 'pembeli' => 'Dewi', 'penjualan_kode' => 'PNJ004', 'penjualan_tanggal' => '2026-02-04 13:00:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Rudi', 'penjualan_kode' => 'PNJ005', 'penjualan_tanggal' => '2026-02-05 14:00:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Lina', 'penjualan_kode' => 'PNJ006', 'penjualan_tanggal' => '2026-02-06 15:00:00'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Joko', 'penjualan_kode' => 'PNJ007', 'penjualan_tanggal' => '2026-02-07 16:00:00'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Maya', 'penjualan_kode' => 'PNJ008', 'penjualan_tanggal' => '2026-02-08 17:00:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Tono', 'penjualan_kode' => 'PNJ009', 'penjualan_tanggal' => '2026-02-09 18:00:00'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Rina', 'penjualan_kode' => 'PNJ010', 'penjualan_tanggal' => '2026-02-10 19:00:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
