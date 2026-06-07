<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoMateri;
use App\Models\ProgressBelajar;
use App\Models\Feedback;
use App\Models\Paket;

class GuruController extends Controller
{
    public function dashboard()
    {
        $guru = auth()->user();
        
        // 1. Total video yang diunggah oleh guru ini
        $totalVideo = VideoMateri::where('guru_id', $guru->id)->count();
        
        // 2. Total murid yang punya catatan progress belajar (ambil langsung dari tabel progress_belajar)
        $totalMurid = ProgressBelajar::distinct('murid_id')->count();

        // 3. Rating rata-rata dari feedback (jika tabel feedback bermasalah, kita default ke 5.0 atau kosongkan sementara)
        $ratingRata = 5.0; 

        // 4. Video Terpopuler (diambil berdasarkan video milik guru tersebut)
        $videoTerpopuler = VideoMateri::where('guru_id', $guru->id)->take(5)->get();

        // 5. Rating terbaru
        $ratingTerbaru = [];

        return view('dashboard.dashboard-guru', compact(
            'guru', 'totalVideo', 'totalMurid', 'ratingRata',
            'videoTerpopuler', 'ratingTerbaru'
        ));
    }

    public function kelolaVideo()
    {
        $guru = auth()->user();
        $videos = VideoMateri::where('guru_id', $guru->id)->with('paket')->get();
        $paket = Paket::all();
        return view('sections.kelola-video-guru', compact('videos', 'paket'));
    }

    public function simpanVideo(Request $request)
    {
        $request->validate([
            'paket_id'     => 'required|exists:paket_pembelajaran,id', 
            'judul'        => 'required|string|max:255',
            'deskripsi'    => 'nullable|string',
            'url_video'    => 'required|string',
            'durasi_menit' => 'nullable|integer',
            'level'        => 'required|in:dasar,menengah,lanjutan',
            'urutan'       => 'required|integer',
        ]);

        VideoMateri::create([
            'guru_id'      => auth()->id(),
            'paket_id'     => $request->paket_id,
            'judul'        => $request->judul,
            'deskripsi'    => $request->deskripsi,
            'url_video'    => $request->url_video,
            'durasi_menit' => $request->durasi_menit,
            'level'        => $request->level,
            'urutan'       => $request->urutan,
        ]);

        return redirect()->back()->with('success', 'Video berhasil ditambahkan!');
    }

    public function hapusVideo($id)
    {
        $video = VideoMateri::where('id', $id)->where('guru_id', auth()->id())->firstOrFail();
        $video->delete();
        return redirect()->back()->with('success', 'Video berhasil dihapus!');
    }

    public function monitoringMurid()
    {
        // Mengambil semua data progress belajar beserta data muridnya
        $progress = ProgressBelajar::with('murid')->get();
        return view('sections.monitoring-murid-guru', compact('progress'));
    }
}