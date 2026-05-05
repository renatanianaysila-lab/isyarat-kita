<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',           // tambahan
        'no_telepon',     // tambahan
        'foto_profil',    // tambahan
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // ===== RELASI =====

    public function videoMateri()
    {
        return $this->hasMany(VideoMateri::class, 'guru_id');
    }

    public function progressBelajar()
    {
        return $this->hasMany(ProgressBelajar::class, 'murid_id');
    }

    public function hasilKuis()
    {
        return $this->hasMany(HasilKuis::class, 'murid_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'murid_id');
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'murid_id');
    }

    // Helper cek role
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isGuru()
    {
        return $this->role === 'guru';
    }

    public function isMurid()
    {
        return $this->role === 'murid';
    }
} 