<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoMateri;
use App\Models\ProgressBelajar;
use App\Models\HasilKuis;
use App\Models\Transaksi;
use App\Models\Paket;

class MuridController extends Controller
{
    public function dashboard()
    {
        $murid = auth()->user();
        $progress = ProgressBelajar::where('murid_id', $murid->id)->with('video')->get();
        $hasilKuis = HasilKuis::where('murid_id', $murid->id)->with('kuis')->get();
        $transaksi = Transaksi::where('murid_id', $murid->id)->with('paket')->get();

        $totalVideo = $progress->count();
        $videoSelesai = $progress->where('status', 'selesai')->count();
        $waktuBelajar = $progress->sum('durasi_ditonton');
        $rataKuis = $hasilKuis->avg('skor');

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
        $historyKuis = HasilKuis::where('murid_id', $murid->id)->with('kuis')->latest()->get();
        $historyBeli = Transaksi::where('murid_id', $murid->id)->with('paket')->latest()->get();

        return view('sections.history-content', compact('historyVideo', 'historyKuis', 'historyBeli'));
    }

    public function katalog()
    {
        $paket = Paket::where('status_paket', true)->get();
        return view('sections.katalog', compact('paket'));
    }
}