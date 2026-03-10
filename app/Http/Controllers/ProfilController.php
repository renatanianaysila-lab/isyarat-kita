<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'tanggal_lahir'  => 'required|date',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'nomor_telepon'  => 'required|string|max:20',
            'email'          => 'required|email|max:255',
        ]);

        $user = Auth::user();

        $user->nama_lengkap  = $request->nama_lengkap;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->nomor_telepon = $request->nomor_telepon;
        $user->email         = $request->email;

        $user->save();

        return back()->with('success', 'Profil berhasil diperbarui.');
    }
}



