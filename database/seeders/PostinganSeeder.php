<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postingan')->insert([
            [
                'murid_id' => 1,
                'paket_id' => 1,
                'isi_postingan' => 'Saya baru mulai belajar materi dasar bahasa isyarat. Materinya cukup mudah dipahami, terutama bagian pengenalan huruf dan gerakan dasar.',
                'tanggal_post' => Carbon::now()->subDays(5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'paket_id' => 1,
                'isi_postingan' => 'Apakah ada tips agar lebih cepat menghafal gerakan alfabet dalam bahasa isyarat? Saya masih sering tertukar beberapa huruf.',
                'tanggal_post' => Carbon::now()->subDays(4),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 3,
                'paket_id' => 2,
                'isi_postingan' => 'Materi percakapan sehari-hari sangat membantu. Saya jadi lebih paham cara menggunakan bahasa isyarat dalam komunikasi sederhana.',
                'tanggal_post' => Carbon::now()->subDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 1,
                'paket_id' => 2,
                'isi_postingan' => 'Saya mengalami kesulitan pada video materi bagian ekspresi wajah. Apakah ekspresi termasuk bagian penting dalam bahasa isyarat?',
                'tanggal_post' => Carbon::now()->subDays(2),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'paket_id' => 3,
                'isi_postingan' => 'Setelah mengikuti beberapa materi, saya merasa lebih percaya diri untuk mencoba berkomunikasi menggunakan bahasa isyarat.',
                'tanggal_post' => Carbon::now()->subDay(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}