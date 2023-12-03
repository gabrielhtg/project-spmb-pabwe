<?php
// app/Http/Controllers/Admin/FormPanelController.php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\data_institusi;
use App\Models\admin;

class FormPanelController extends Controller
{
    // public function getviewformpanel()
    // {
    //   $admin = Auth::user();
    //   $data = [
    //       'indexActive' => 2,
    //       'admin' => $admin
    //   ];
    //     return view('admin-panel.formpanel', $data); 
    // }

    public function getviewformpanel(){
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $data = ['dataInstitusi'=> $dataInstitusi];
        return view("chatbot.form", $data);
    }

    
}