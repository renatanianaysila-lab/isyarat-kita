<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('detail_transaksi')->insert([
            [
                'transaksi_id' => 1,
                'paket_id'     => 1,
                'harga_satuan' => 0,
                'jumlah'       => 1,
                'subtotal'     => 0,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}