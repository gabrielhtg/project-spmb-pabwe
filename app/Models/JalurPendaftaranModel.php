<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JalurPendaftaranModel extends Model
{
    use HasFactory;

    protected $table = "jalur_pendaftaran";

    protected $fillable = [
        'jalur_pendaftarn',
        'desk_pers_umum',
        'created_by',
        'updated_by' 
    ];
}
