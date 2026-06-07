<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RatingGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rating_guru')->insert([
            [
                'murid_id' => 1,
                'guru_id' => 1,
                'paket_id' => 1,
                'nilai_rating' => 5,
                'komentar' => 'Penjelasan guru sangat mudah dipahami dan materi disampaikan dengan jelas.',
                'tanggal_rating' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'guru_id' => 1,
                'paket_id' => 1,
                'nilai_rating' => 4,
                'komentar' => 'Materinya bagus, tetapi beberapa bagian gerakan masih perlu dijelaskan lebih pelan.',
                'tanggal_rating' => Carbon::now()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 3,
                'guru_id' => 2,
                'paket_id' => 2,
                'nilai_rating' => 5,
                'komentar' => 'Guru memberikan contoh yang jelas dalam penggunaan bahasa isyarat sehari-hari.',
                'tanggal_rating' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 1,
                'guru_id' => 2,
                'paket_id' => 2,
                'nilai_rating' => 4,
                'komentar' => 'Pembelajaran cukup interaktif dan membantu saya memahami ekspresi dalam bahasa isyarat.',
                'tanggal_rating' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'guru_id' => 3,
                'paket_id' => 3,
                'nilai_rating' => 5,
                'komentar' => 'Materi lanjutan disampaikan dengan baik dan mudah diikuti.',
                'tanggal_rating' => Carbon::now()->subDay(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}