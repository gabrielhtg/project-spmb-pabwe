<?php

namespace App\Http\Controllers;

use App\Models\AlamatInstitusiModel;
use App\Models\data_institusi;
use App\Models\HeroSectionModel;
use App\Models\SocalMediaModel;
use App\Models\MitraModel;
use Illuminate\Support\Facades\Auth;
use App\Models\AkreditasiInstitutiModel;
use App\Models\AkreditasiSectionModel;
use App\Models\EmailModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\NomorTeleponModel;
use App\Models\Lokasi;
use App\Models\JenisTes;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function getviewMitra(){
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $dataMitra = MitraModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'mitra' => $dataMitra,
            'akreditasiDashboard' => $akreditasiDashboard,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
        ];

        return view('mitra.mitra', $data);
        
    }

    public function getAddMitra(){
        $data = [
            "auth" => Auth::user()
        ];
        return view("app.mitra.add", $data);
    }
    public function postAddMitra(Request $request){
        
        $this->validate($request, [
            "nama"=> "required|string",
            "logo"=> "required|image|mimes:jpeg,png,jpg|max:1024",
        ]);

        $auth = Auth::user();

        // Mengambil file yang sudah divalidasi dari request
        $photo = $request->file('logo');
    
        // Membuat nama unik untuk file yang diunggah
        $filename = $auth->id . "_" . time() . '.' . $photo->getClientOriginalExtension();
    
        // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
        $directory = public_path('img/portofolio/');
    
        //Pindahkan file ke direktori yang diinginkan
        $photo->move($directory, $filename);

        $logo = "img/mitra/" . $filename;
    
        MitraModel::create([
            "user_id" => $auth->id,
            "nama"=> $request->link,
            "logo"=> $logo,
        ]);
    
        return redirect()->route("mitrapanel");
    }

    public function getEditportofolio($mitra_id){

        $auth = Auth::user();
        $mitra = MitraModel::where("id", $mitra_id)->where("user_id", $auth->id)->first();

        if(!$mitra){
            return redirect()->route("mitrapanel");
        }

        $data = [
            "auth" => $auth,
            "mitra"=> $mitra
            ];

            return view("app.mitra.edit", $data);
    }

    public function postEditmitra(Request $request)
    {
        $this->validate($request, [
            "mitra_id"=> 'required|exists:mitras,id',
            "nama"=> "required|string",
            "logo"=> "required|image|mimes:jpeg,png,jpg|max:1024|nullable",
        ]);

        $auth = Auth::user();

        $mitra = MitraModel::where("id", $request->mitra_id)->first();

        // Mengambil file yang sudah divalidasi dari request
        $file_logo = $request->file('logo');
        if($file_logo){
            // Membuat nama unik untuk file yang diunggah
            $filename = $auth->id . "_" . time() . '.' . $file_logo->getClientOriginalExtension();
        
            // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
            $directory = public_path('img/mitra/');
        
            //Pindahkan file ke direktori yang diinginkan
            $file_logo->move($directory, $filename);

            // ganti logo dan hapus data lama
            if($mitra->logo && file_exists($mitra->logo)){
                unlink($mitra->logo);
            }

            $mitra->logo = "img/mitra/" . $filename;
            
        }
    
        $mitra-> link = $request->link;
        $mitra-> alt = $request->alt;
        $mitra->save();
    
        return redirect()->route("home");
    }

    public function getDeletemitra($mitra_id){

        $auth = Auth::user();
        $mitra = MitraModel::where("id", $mitra_id)->where("user_id", $auth->id)->first();

        if(!$mitra){
            return redirect()->route("mitrapanel");
        }

        $mitra->delete();
        return redirect()->route("mitrapanel");
    }
}