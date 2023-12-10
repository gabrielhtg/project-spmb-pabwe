<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkreditasiSectionModel extends Model
{
    use HasFactory;

    protected $table = 'akreditasi_dashboard';

    protected $fillable = [
        'header',
        'paragraph'
    ];
}