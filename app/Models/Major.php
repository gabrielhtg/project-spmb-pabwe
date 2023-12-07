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
        'nama',
        'kode_fakultas',
        'kode_prodi',
        'deskripsi',
        'visi',
        'misi',
        'prospek',
        'gelar',
        'lama',
        'biaya',
        'syarat',
        'lokasi',       
        'gambar',
        'akreditasi',
    ];
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'kode_fakultas', 'id');
    }

    

}
