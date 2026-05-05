<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoMateri extends Model
{
    protected $table = 'video_materi';
    protected $fillable = ['paket_id', 'guru_id', 'judul', 'deskripsi', 'url_video', 'durasi_menit', 'level', 'urutan', 'is_terkunci'];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function progress()
    {
        return $this->hasMany(ProgressBelajar::class, 'video_id');
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'video_id');
    }//
}
