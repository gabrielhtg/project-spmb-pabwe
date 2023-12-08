<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkreditasiInstitutiModel extends Model
{
    use HasFactory;

    protected $table = 'akreditasi_institusi';

    protected $fillable = [
        'akreditasi',
        'lembaga_akreditasi',
        'sertifikat_akreditasi',
        'tahun_akreditasi',
    ];
}
