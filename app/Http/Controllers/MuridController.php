<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoMateri;
use App\Models\ProgressBelajar;
use App\Models\Transaksi;
use App\Models\Paket;

class MuridController extends Controller
{
    public function dashboard()
    {
        $murid = auth()->user();
        
        // FIX 1: Mengambil data progress belajar akumulasi (Tanpa .with('video') karena tidak ada kolom video_id)
        $progressData = ProgressBelajar::where('murid_id', $murid->id)->first();
        
        $hasilKuis = collect(); 
        $transaksi = Transaksi::where('murid_id', $murid->id)->with('paket')->get();

        // FIX 2: Ambil kalkulasi angka langsung dari kolom akumulasi database kamu
        $totalVideo   = $progressData ? $progressData->total_video : 0;
        $videoSelesai = $progressData ? $progressData->video_ditonton : 0;
        $waktuBelajar = $progressData ? $progressData->progress_persen : 0; // Menggunakan progress persen sebagai indikator
        $rataKuis     = $progressData ? $progressData->skor_kuis : 0; 

        // Buat koleksi kosong agar variabel $progress di view tidak memicu error undefined
        $progress = $progressData ? collect([$progressData]) : collect();

        return view('dashboard.dashboard-murid', compact(
            'murid', 'progress', 'hasilKuis', 'transaksi',
            'totalVideo', 'videoSelesai', 'waktuBelajar', 'rataKuis'
        ));
    }

    public function materi()
    {
        $murid = auth()->user();
        $transaksi = Transaksi::where('murid_id', $murid->id)
            ->where('status_transaksi', 'berhasil')
            ->pluck('paket_id');

        $videos = VideoMateri::whereIn('paket_id', $transaksi)->get();
        
        // FIX 3: Karena statusnya global akumulasi, kita beri status default 'selesai' jika murid sudah punya progress
        $hasProgress = ProgressBelajar::where('murid_id', $murid->id)->exists();
        $progress = $hasProgress ? 'selesai' : 'belum';

        return view('sections.materi-content', compact('videos', 'progress'));
    }

    public function history()
    {
        $murid = auth()->user();
        
        // FIX 4: Mengambil riwayat akumulasi tanpa memanggil relasi video yang tidak ada
        $historyVideo = ProgressBelajar::where('murid_id', $murid->id)->latest()->get();
        $historyKuis  = collect(); 
        $historyBeli  = Transaksi::where('murid_id', $murid->id)->with('paket')->latest()->get();

        return view('sections.history-content', compact('historyVideo', 'historyKuis', 'historyBeli'));
    }

    public function katalog()
    {
        $paket = Paket::where('status_paket', true)->get();
        return view('sections.katalog', compact('paket'));
    }
}