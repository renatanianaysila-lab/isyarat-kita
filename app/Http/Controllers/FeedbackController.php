<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::where('murid_id', auth()->id())
            ->with('video')->get();
        return view('sections.feedback-content', compact('feedbacks'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'video_id'         => 'required|exists:video_materi,id',
            'rating'           => 'required|integer|min:1|max:5',
            'tingkat_kesulitan'=> 'nullable|in:mudah,sedang,sulit',
            'komentar'         => 'nullable|string',
        ]);

        Feedback::updateOrCreate(
            ['murid_id' => auth()->id(), 'video_id' => $request->video_id],
            [
                'rating'            => $request->rating,
                'tingkat_kesulitan' => $request->tingkat_kesulitan,
                'komentar'          => $request->komentar,
            ]
        );

        return redirect()->back()->with('success', 'Feedback berhasil dikirim!');
    }
}