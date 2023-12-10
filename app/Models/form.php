<?php
// app/Http/Controllers/FormController.php

use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class formController extends Controller
{
    use HasFactory;
    protected $table = 'form';
    public function form()
    {
        return view('chatbot.form');
    }

    public function processForm(Request $request)
    {
        
        $formData = new Form([
            'nama' => $request->input('nama'),
            'nomor' => $request->input('nomor'),
            'pesan' => $request->input('pesan'),
        ]);

        $formData->save();

        return redirect()->route('chatbot.form')->with('success', 'Formulir berhasil dikirim');
    }
}

