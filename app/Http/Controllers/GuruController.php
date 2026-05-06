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
        $totalVideo = VideoMateri::where('guru_id', $guru->id)->count();
        $totalMurid = ProgressBelajar::whereHas('video', function($q) use ($guru) {
            $q->where('guru_id', $guru->id);
        })->distinct('murid_id')->count();

        $ratingRata = Feedback::whereHas('video', function($q) use ($guru) {
            $q->where('guru_id', $guru->id);
        })->avg('rating');

        $videoTerpopuler = VideoMateri::where('guru_id', $guru->id)
            ->withCount('progress')
            ->orderBy('progress_count', 'desc')
            ->take(5)->get();

        $ratingTerbaru = Feedback::whereHas('video', function($q) use ($guru) {
            $q->where('guru_id', $guru->id);
        })->with(['murid', 'video'])->latest()->take(5)->get();

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
            'paket_id'     => 'required|exists:paket,id',
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
        $guru = auth()->user();
        $progress = ProgressBelajar::whereHas('video', function($q) use ($guru) {
            $q->where('guru_id', $guru->id);
        })->with(['murid', 'video'])->get();

        return view('sections.monitoring-murid-guru', compact('progress'));
    }
}