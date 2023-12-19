<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubJalurPendaftaranModel;

class SubJalurPendaftaran extends Model
{
    use HasFactory;

    protected $table = "sub_jalur_pendaftaran";

    protected $fillable = [
        'title',
        'jalurPen',
        'deskripsi_jalur',
        'created by',
        'created at',
        'updated by',
        'updated at',
    ];
}