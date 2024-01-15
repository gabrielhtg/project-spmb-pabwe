<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms'; // Nama tabel di database

    protected $fillable = [
        'nama',
        'nomor',
        'pesan',
    ];

    // Jika Anda memiliki relasi atau metode lain, Anda dapat menambahkannya di sini
    public function showAdminView()
{
    $formData = Form::all(); // Ambil semua data dari tabel forms

    return view('admin.view', compact('formData'));
}

}
