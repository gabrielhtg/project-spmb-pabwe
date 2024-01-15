<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfografisModel extends Model
{
    use HasFactory;

    protected $table = 'infografis_admisi';

    protected $fillable = [
        'gambar',
        'jalur',
        'nomor_urut'
    ];
}
