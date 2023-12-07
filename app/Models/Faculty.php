<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = "faculties";

    protected $fillable = [
        'kode_fakultas',
        'nama',
        'deskripsi',
        'gambar',
        'lokasi',
        'visi',
        'misi',
    ];

    public function major()
    {
        return $this->hasMany(Major::class, 'kode_fakultas', 'id');
    }
}
