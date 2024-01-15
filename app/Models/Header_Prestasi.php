<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_Prestasi extends Model
{
    use HasFactory;

    protected $table = 'header_prestasi';

    protected $fillable = [
        'judul',
        'foto',
        'deskripsi'
    ];

    public $timestamps = true;
}
