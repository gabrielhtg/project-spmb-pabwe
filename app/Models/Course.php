<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "courses";

    protected $fillable = ['kode_prodi', 'kode_mk', 'nama', 'sks', 'semester'];




    public function major()
    {
        return $this->belongsTo(Major::class, 'kode_prodi', 'kode_prodi');
    }
}