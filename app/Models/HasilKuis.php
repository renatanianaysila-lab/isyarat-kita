<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilKuis extends Model
{
    protected $table = 'hasil_kuis';
    protected $fillable = ['murid_id', 'kuis_id', 'skor', 'status', 'dikerjakan_at'];

    public function murid()
    {
        return $this->belongsTo(User::class, 'murid_id');
    }

    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'kuis_id');
    }//
}
