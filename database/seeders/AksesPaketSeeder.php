<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AksesPaketSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('akses_paket')->insert([
            [
                'murid_id'         => 1,
                'paket_id'         => 1,
                'tanggal_mulai'    => now(),
                'tanggal_berakhir' => now()->addDays(30),
                'status_akses'     => 'aktif',
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}