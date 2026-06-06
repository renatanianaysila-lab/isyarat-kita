<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi_pembelian';
    protected $primaryKey = 'transaksi_id';

    protected $fillable = [
        'murid_id',
        'kode_transaksi',
        'total_harga',
        'status_transaksi',
        'tanggal_transaksi',
    ];

    public function murid()
    {
        return $this->belongsTo(User::class, 'murid_id');
    }

    public function paket()
    {
        return $this->belongsToMany(Paket::class, 'detail_transaksi', 'transaksi_id', 'paket_id');
    }

    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'transaksi_id');
    }
}