<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Beasiswa extends Model
{

  protected $table = 'beasiswa';
    protected $fillable = ['judul', 'deskripsi', 'gambar', 'file'];
    
    // Aturan validasi untuk membuat Beasiswa baru
    public static function validateCreate(array $data)
    {
        return Validator::make($data, [
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
            // Sesuaikan aturan validasi lainnya sesuai kebutuhan
        ]);
    }

    public function index()
    {
        // Ambil semua data beasiswa dari tabel 'beasiswas'
        $beasiswa = Beasiswa::all();

        // Kirim data beasiswa ke halaman 'beasiswa.index'
        return view('beasiswa.index', compact('beasiswa'));
    }

    // ...
}
