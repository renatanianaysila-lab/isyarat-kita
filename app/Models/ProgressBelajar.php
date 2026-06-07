<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressBelajar extends Model
{
    protected $table = 'progress_belajar';
    protected $primaryKey = 'progress_id'; // Sesuai file migrasimu

    protected $fillable = ['murid_id', 'progress_persen', 'video_ditonton', 'total_video', 'skor_kuis', 'last_watch'];

    public function murid()
    {
        // Menghubungkan ke model Murid menggunakan foreign key murid_id
        return $this->belongsTo(Murid::class, 'murid_id', 'murid_id');
    }
}