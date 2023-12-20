<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPendaftaranModel extends Model
{
    use HasFactory;

    protected $table = "jadwal_pendaftaran";

    protected $fillable = [
        'jenis_jalur',
        'tanggal_pendaftaran',
        'created_by',
        'updated_by',
    ];
}
