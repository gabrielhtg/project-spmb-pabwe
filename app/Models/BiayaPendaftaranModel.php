<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaPendaftaranModel extends Model
{
    use HasFactory;

    protected $table = "biaya_pendaftaran";

    protected $fillable = [
        'jlr_Pen',
        'biayaPen',

    ];
}
