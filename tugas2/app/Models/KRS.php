<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $table = 'krs';
    
    protected $fillable = [
        'mahasiswa_id',
        'jadwal_id',
        'semester'
    ];
}
