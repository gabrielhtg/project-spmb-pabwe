<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlamatInstitusiModel extends Model
{
    use HasFactory;

    protected $table = 'alamat_institusi';

    protected $fillable = [
        'nama',
        'alamat',
        'created_by'
    ];
}
