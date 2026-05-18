<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiPembelianSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transaksi_pembelian')->insert([
            [
                'murid_id'           => 1,
                'kode_transaksi'     => 'TRX-001',
                'total_harga'        => 0,
                'status_transaksi'   => 'sukses',
                'tanggal_transaksi'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ]);
    }
}