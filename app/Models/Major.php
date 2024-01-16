<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Major extends Model
{
    use HasFactory;

    protected $table = "majors";

    protected $fillable = [
        'kode_prodi',
        'nama',
        'kode_fakultas',
        'deskripsi',
        'gambar',
        'visi',
        'misi',
        'prospek',
        'gelar',
        'lama',
        'biaya',
        'syarat',
        'lokasi',
        'akreditasi',
    ];
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'kode_fakultas', 'id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'kode_prodi', 'id');
    }

}
