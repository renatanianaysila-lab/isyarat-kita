<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materi')->insert([
            [
                'paket_id' => 1,
                'judul_materi' => 'Pengenalan Bahasa Isyarat',
                'deskripsi_materi' => 'Materi ini membahas pengenalan dasar bahasa isyarat, fungsi bahasa isyarat, serta pentingnya komunikasi inklusif.',
                'thumbnail' => 'thumbnail/materi/pengenalan-bahasa-isyarat.jpg',
                'urutan' => 1,
                'status_materi' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'paket_id' => 1,
                'judul_materi' => 'Alfabet Bahasa Isyarat',
                'deskripsi_materi' => 'Materi ini menjelaskan bentuk gerakan alfabet dalam bahasa isyarat sebagai dasar komunikasi awal.',
                'thumbnail' => 'thumbnail/materi/alfabet-bahasa-isyarat.jpg',
                'urutan' => 2,
                'status_materi' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'paket_id' => 2,
                'judul_materi' => 'Kosakata Sehari-hari',
                'deskripsi_materi' => 'Materi ini berisi kosakata dasar yang sering digunakan dalam komunikasi sehari-hari menggunakan bahasa isyarat.',
                'thumbnail' => 'thumbnail/materi/kosakata-sehari-hari.jpg',
                'urutan' => 1,
                'status_materi' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'paket_id' => 2,
                'judul_materi' => 'Percakapan Sederhana',
                'deskripsi_materi' => 'Materi ini membahas contoh percakapan sederhana menggunakan bahasa isyarat dalam situasi umum.',
                'thumbnail' => 'thumbnail/materi/percakapan-sederhana.jpg',
                'urutan' => 2,
                'status_materi' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'paket_id' => 3,
                'judul_materi' => 'Ekspresi dan Gestur',
                'deskripsi_materi' => 'Materi ini menjelaskan peran ekspresi wajah dan gestur tubuh dalam memperjelas makna bahasa isyarat.',
                'thumbnail' => 'thumbnail/materi/ekspresi-dan-gestur.jpg',
                'urutan' => 1,
                'status_materi' => 'aktif',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}