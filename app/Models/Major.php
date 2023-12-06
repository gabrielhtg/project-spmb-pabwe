<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $table = "majors";

    protected $fillable = [
        'nama',
        'kode_fakultas',
        'kode_prodi',
        'deskripsi',
        'visi',
        'misi',
        'prospek',
        'gelar',
        'biaya',
        'lama',
        'syarat',
        'gambar',
        'akreditasi',
        'lokasi',
    ];
}
