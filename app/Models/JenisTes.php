<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTes extends Model
{
    use HasFactory;
    protected $table ='jenis';
    protected $primaryKey = 'id';
    protected $fillable = ['gelombang', 'jenisUjian'];

}
