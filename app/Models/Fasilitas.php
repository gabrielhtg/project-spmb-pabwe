<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = "fasilitas";
    protected $fillable = ['kategori','nama_fasilitas','deskripsi_fasilitas','nama_file','file_gambar'];
}
