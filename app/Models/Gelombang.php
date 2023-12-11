<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    use HasFactory;

    protected $table = 'gelombang';
    protected $primaryKey = 'id';
    protected $fillable = ['namaGelombang', 'deskripsi'];
    
    // Jika akan ada relasi, tambahkan di sini
}