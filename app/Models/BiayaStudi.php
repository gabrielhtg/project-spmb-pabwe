<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaStudi extends Model
{
    use HasFactory;

    protected $table = 'biaya_studi';
 
    protected $fillable = [
        'fakultas', 
        'pro_stud', 
        'biaya_spp', 
        'uang_pengembangan', 
        'uang_pangkal', 
        'perlengkapan_mahasiswa', 
        'perlengkapan_makan'
    ];
}