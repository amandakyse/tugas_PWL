<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'mata_kuliah_id',
        'hari',
        'jam',
        'ruangan'
    ];
}