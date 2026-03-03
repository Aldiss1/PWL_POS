<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT. Gudang Garam Tbk',
                'supplier_alamat' => 'Kediri, Jawa Timur'
            ],
            [
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'PT. Wings Surya',
                'supplier_alamat' => 'Surabaya, Jawa Timur'
            ],
            [
                'supplier_kode' => 'SUP03',
                'supplier_nama' => 'PT. Indofood Sukses Makmur Tbk',
                'supplier_alamat' => 'Jakarta Selatan, DKI Jakarta'
            ],
        ];

        \Illuminate\Support\Facades\DB::table('m_supplier')->insert($data);
    }
}
