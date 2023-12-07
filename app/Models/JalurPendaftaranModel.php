<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHeaderAdmisi extends Model
{
    use HasFactory;

    protected $table = "jalur_pendaftaran";

    protected $fillable = [
        'jalur_pendaftarn',
        'desk_pers_umum' 
    ];
}
