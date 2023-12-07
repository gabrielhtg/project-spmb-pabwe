<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbkmModel extends Model
{
    use HasFactory;

    protected $table = 'mbkm';

    protected $fillable = [
        'jenis_kegiatan',
        'jumlah_sks',
        'potongan_spp',
        'created_by',
        'updated_by',
        'updated_at',
        'created_at'
    ];
}
