<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $fillable = ['paket_id', 'judul_kuis', 'deskripsi', 'durasi_menit', 'passing_score'];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }

    public function soal()
    {
        return $this->hasMany(Soal::class, 'kuis_id');
    }

    public function hasilKuis()
    {
        return $this->hasMany(HasilKuis::class, 'kuis_id');
    }//
}
