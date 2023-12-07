<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailModel extends Model
{
    use HasFactory;

    protected $table = 'email';

    protected $fillable = [
        'nama',
        'email',
        'created_by',
        'created_at',
        'updated_by',
        'udpated_at'
    ];
}
