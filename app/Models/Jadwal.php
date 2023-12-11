<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id';
    protected $fillable = ['jenisUjian', 'lokasiUjian', 'jadwalTest'];
    
    // Jika akan ada relasi, tambahkan di sini
}