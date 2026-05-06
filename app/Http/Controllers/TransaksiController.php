<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Paket;
use Illuminate\Support\Str;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::where('murid_id', auth()->id())
            ->with('paket')->latest()->get();
        return view('sections.history-content', compact('transaksi'));
    }

    public function beli(Request $request)
    {
        $request->validate([
            'paket_id'          => 'required|exists:paket,id',
            'metode_pembayaran' => 'required|in:qris,virtual_account',
        ]);

        $paket = Paket::findOrFail($request->paket_id);

        Transaksi::create([
            'murid_id'          => auth()->id(),
            'paket_id'          => $paket->id,
            'kode_transaksi'    => 'TRX-' . strtoupper(Str::random(8)),
            'total_harga'       => $paket->harga,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_transaksi'  => 'berhasil',
            'tanggal_transaksi' => now(),
        ]);

        return redirect()->route('murid.dashboard')->with('success', 'Pembayaran berhasil!');
    }
}