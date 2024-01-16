<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropdownAdmisiModel extends Model
{
    use HasFactory;

    protected $table = 'dropdown_admisi';

    protected $fillable = [
        'judul',
        'isi',
        'jalur',
        'created_by',
        'updated_by'
    ];
}
