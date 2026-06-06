<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoMateri;
use App\Models\ProgressBelajar;
// use App\Models\HasilKuis; // Dimatikan sementara karena tabel tidak ada
use App\Models\Transaksi;
use App\Models\Paket;

class MuridController extends Controller
{
    public function dashboard()
    {
        $murid = auth()->user();
        
        // Mengambil data progress belajar murid
        $progress = ProgressBelajar::where('murid_id', $murid->id)->with('video')->get();
        
        // Dimatikan sementara karena tabel hasil_kuis tidak ada di migrasi
        // $hasilKuis = HasilKuis::where('murid_id', $murid->id)->with('kuis')->get();
        $hasilKuis = collect(); // Membuat koleksi kosong agar variabel $hasilKuis tidak error di view
        
        $transaksi = Transaksi::where('murid_id', $murid->id)->with('paket')->get();

        $totalVideo = $progress->count();
        $videoSelesai = $progress->where('status', 'selesai')->count();
        $waktuBelajar = $progress->sum('durasi_ditonton');
        
        // Beri nilai default 0 agar di halaman dashboard tidak kosong/error
        $rataKuis = 0; 

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
        $progress = ProgressBelajar::where('murid_id', $murid->id)->pluck('status', 'video_id');

        return view('sections.materi-content', compact('videos', 'progress'));
    }

    public function history()
    {
        $murid = auth()->user();
        $historyVideo = ProgressBelajar::where('murid_id', $murid->id)->with('video')->latest()->get();
        
        // Dimatikan sementara karena model HasilKuis belum siap tabelnya
        // $historyKuis = HasilKuis::where('murid_id', $murid->id)->with('kuis')->latest()->get();
        $historyKuis = collect(); // Koleksi kosong biar halaman history ga error
        
        $historyBeli = Transaksi::where('murid_id', $murid->id)->with('paket')->latest()->get();

        return view('sections.history-content', compact('historyVideo', 'historyKuis', 'historyBeli'));
    }

    public function katalog()
    {
        $paket = Paket::where('status_paket', true)->get();
        return view('sections.katalog', compact('paket'));
    }
}