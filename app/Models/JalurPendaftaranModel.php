<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JalurPendaftaranModel extends Model
{
    use HasFactory;

    protected $table = "jalur_pendaftaran";

    protected $fillable = [
        'jalurPendaftaran',
        'desk_pers_umum',
        'created by',
        'created at',
        'updated by',
        'updated at',
    ];
}
