<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi'; // ← tambahan

    protected $fillable = ['murid_id', 'paket_id', 'kode_transaksi', 'total_harga', 'metode_pembayaran', 'status_transaksi', 'tanggal_transaksi'];

    public function murid()
    {
        return $this->belongsTo(User::class, 'murid_id');
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'paket_id');
    }
}