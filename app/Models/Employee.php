<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        'kode_prodi',
        'kode_fakultas',
        'nama',
        'nidn',
        'jabatan',
        'pendidikan',
        'gambar',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class, 'kode_prodi', 'kode_prodi');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'kode_fakultas', 'kode_fakultas');
    }
}
