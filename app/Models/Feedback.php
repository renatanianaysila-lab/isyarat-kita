<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
<<<<<<< HEAD
    protected $fillable = ['murid_id', 'video_id', 'rating', 'tingkat_kesulitan', 'komentar'];

    public function murid()
    {
        return $this->belongsTo(User::class, 'murid_id');
    }

    public function video()
    {
        return $this->belongsTo(VideoMateri::class, 'video_id');
    }//
=======
    //
>>>>>>> 6bd128d49019ac1a3101f66b87850560b02eab31
}
