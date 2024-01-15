<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfBiayaModel extends Model
{
    use HasFactory;
    protected $table = 'pdf_biaya_pendaftaran';
    protected $fillable = ['PdfbiayaPendaftaran'];

}