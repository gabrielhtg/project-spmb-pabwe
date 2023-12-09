<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NomorTeleponModel extends Model
{
    use HasFactory;

    protected $table = 'nomor_telepon';

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];
}
