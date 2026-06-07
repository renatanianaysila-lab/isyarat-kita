<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket_pembelajaran';
    
    // FIX TAMBAHAN: Mengunci nama kolom primary key database ke 'paket_id'
    protected $primaryKey = 'paket_id'; 
    
    protected $fillable = ['nama_paket', 'tipe', 'deskripsi', 'harga', 'durasi_bulan', 'status_paket'];

    public function videoMateri()
    {
        return $this->hasMany(VideoMateri::class, 'paket_id');
    }

    public function kuis()
    {
        return $this->hasMany(Kuis::class, 'paket_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'paket_id');
    }
}