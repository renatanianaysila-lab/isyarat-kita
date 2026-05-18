<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pembayaran')->insert([
            [
                'transaksi_id'      => 1,
                'metode_pembayaran' => 'transfer',
                'jumlah_bayar'      => 0,
                'status_pembayaran' => 'sukses',
                'tanggal_bayar'     => now(),
                'bukti_pembayaran'  => null,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);
    }
}