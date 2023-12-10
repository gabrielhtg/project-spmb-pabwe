<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHeaderAdmisi extends Model
{
    use HasFactory;

    protected $table = "header_admisi";

    protected $fillable = [
        'letak_foto'
    ];
}