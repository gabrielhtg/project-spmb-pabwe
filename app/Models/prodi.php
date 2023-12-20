<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fillable = [
        'program_studi',
        'deskripsi_persyaratan',
        'cover'
  ];
}