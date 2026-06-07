<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RekomendasiMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rekomendasi_materi')->insert([
            [
                'murid_id' => 1,
                'paket_id' => 1,
                'alasan_rekomendasi' => 'Cocok untuk pemula',
                'skor_relevansi' => 95.50,
                'tanggal_rekomendasi' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'paket_id' => 1,
                'alasan_rekomendasi' => 'Materi dasar perlu diperkuat',
                'skor_relevansi' => 88.75,
                'tanggal_rekomendasi' => Carbon::now()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 3,
                'paket_id' => 2,
                'alasan_rekomendasi' => 'Sesuai progres belajar',
                'skor_relevansi' => 91.25,
                'tanggal_rekomendasi' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 1,
                'paket_id' => 2,
                'alasan_rekomendasi' => 'Lanjutan dari materi dasar',
                'skor_relevansi' => 86.00,
                'tanggal_rekomendasi' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'paket_id' => 3,
                'alasan_rekomendasi' => 'Perlu latihan tingkat lanjut',
                'skor_relevansi' => 82.50,
                'tanggal_rekomendasi' => Carbon::now()->subDay(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}