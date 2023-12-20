<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaAdminModel extends Model
{
    use HasFactory;
    protected $table = 'biaya_admin';
    protected $fillable = [
    'biayaasrama', 
    'biayamakan', 
    'biayawisuda', 
    'biayadeposit',
    'biayatingkatakhir', 
];
}