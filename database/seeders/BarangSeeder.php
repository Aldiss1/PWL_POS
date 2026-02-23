<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Teh Botol Sosro', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Sabun Lifebuoy', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Shampoo Pantene', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'Pewangi Molto', 'harga_beli' => 8000, 'harga_jual' => 12000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Sabun Cuci Rinso', 'harga_beli' => 10000, 'harga_jual' => 14000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Susu Bebelac', 'harga_beli' => 25000, 'harga_jual' => 35000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Popok Mamy Poko', 'harga_beli' => 30000, 'harga_jual' => 40000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Baterai ABC', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Lampu Philips', 'harga_beli' => 12000, 'harga_jual' => 18000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
