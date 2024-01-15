<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraModel extends Model
{
    use HasFactory;

    protected $table= 'mitras';
    protected $fillable = [
        'nama', 
        'logo',
        'created_by'
        ];
}
