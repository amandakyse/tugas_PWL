<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = [
        'dosen_id',
        'nama_mk',
        'sks'
    ];
}