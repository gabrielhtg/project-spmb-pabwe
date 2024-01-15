<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjianModel extends Model
{
    use HasFactory;

    protected $table = 'jadwal_ujian';

    protected $fillable = [
        'jalur_ujian',
        'tahun_akademik',
        'deskripsi',
        'created_by',
        'updated_by'
    ];
}
