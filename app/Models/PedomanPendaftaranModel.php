<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedomanPendaftaranModel extends Model
{
    use HasFactory;
    protected $table = 'pedoman_pendaftaran';
    protected $fillable = ['PedomanPendaftaran'];

}