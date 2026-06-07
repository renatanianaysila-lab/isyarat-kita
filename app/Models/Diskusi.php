<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    protected $table = 'diskusi';
    protected $primaryKey = 'diskusi_id';

    protected $fillable = [
        'user_id',
        'video_param',
        'isi_komentar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}