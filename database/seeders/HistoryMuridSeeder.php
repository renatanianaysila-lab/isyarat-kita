<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistoryMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('history_murid')->insert([
            [
                'murid_id' => 1,
                'last_watch' => Carbon::now()->subDays(5),
                'status_selesai' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'last_watch' => Carbon::now()->subDays(4),
                'status_selesai' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 3,
                'last_watch' => Carbon::now()->subDays(3),
                'status_selesai' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 1,
                'last_watch' => Carbon::now()->subDays(2),
                'status_selesai' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'murid_id' => 2,
                'last_watch' => Carbon::now()->subDay(),
                'status_selesai' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}