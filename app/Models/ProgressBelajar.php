<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressBelajar extends Model
{
    protected $table = 'progress_belajar';
    protected $fillable = ['murid_id', 'video_id', 'status', 'durasi_ditonton', 'terakhir_ditonton'];

    public function murid()
    {
        return $this->belongsTo(User::class, 'murid_id');
    }

    public function video()
    {
        return $this->belongsTo(VideoMateri::class, 'video_id');
    }//
}
