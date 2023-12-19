<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\data_institusi;
use App\Models\SocalMediaModel;
use App\Models\CoverFaq;
use App\Models\AkreditasiSectionModel;
use App\Models\AlamatInstitusiModel;
use App\Models\HeroSectionModel;
use App\Models\ModelHeaderAdmisi;
use App\Models\AkreditasiInstitutiModel;
use App\Models\EmailModel;
use App\Models\InfografisModel;
use App\Models\JadwalUjianModel;
use App\Models\MbkmModel;
use App\Models\NomorTeleponModel;
use App\Models\Lokasi;
use App\Models\JenisTes;
use App\Models\Testimoni;

class FaqController extends Controller
{
    public function getviewFaq()
    { 
        $dataInstitusi = data_institusi::where('id', 1)->first();
        $dataHeroSection = HeroSectionModel::where('id', 1)->first();
        $dataSosmed = SocalMediaModel::all();
        $dataAlamat = AlamatInstitusiModel::all();
        $akreditasiDashboard = AkreditasiSectionModel::where('id', 1)->first();
        $faq = Faq::orderBy('created_at', 'desc')->get();
        $dataNomorTelepon = NomorTeleponModel::all();
        $dataEmail = EmailModel::all();
        $dataAkreditasiInstitusi = AkreditasiInstitutiModel::all()->sortByDesc('tahun_akreditasi')->first();

        $data = [
            'dataInstitusi' => $dataInstitusi,
            'dataHeroSection' => $dataHeroSection,
            'dataSosmed' => $dataSosmed,
            'dataAlamat' => $dataAlamat,
            'akreditasiDashboard' => $akreditasiDashboard,
            'faq' => $faq,
            'dataNomorTelepon' => $dataNomorTelepon,
            'dataEmail' => $dataEmail,
            'dataAkreditasiInstitusi' => $dataAkreditasiInstitusi,
            'dataTestimoni' => Testimoni::orderBy('created_at', 'desc')->take(8)->get(),
        ];

        return view("faq.faq", $data);
    }

    public function getAddFaq(){
        $data = [
            "auth" => Auth::user()
        ];
        return view("admin-panel.sub_faq_panel.add", $data);
    }
    public function postAddFaq(Request $request){
        
        $this->validate($request, [
            "kategori"=> "required|string",
            "pertanyaan"=> "required|string",
            "jawaban"=> "required|string",
        ]);

        $auth = Auth::user();
    
        Faq::create([
            "user_id" => $auth->id,
            "kategori"=> $request->kategori,
            "pertanyaan"=> $request->pertanyaan,
            "jawaban"=> $request->jawaban,
        ]);
    
        return redirect()->route("faqpanel");
    }

    public function getEditfaq($faq_id){

        $auth = Auth::user();
        $faq = Faq::where("id", $faq_id)->where("user_id", $auth->id)->first();

        if(!$faq){
            return redirect()->route("faq");
        }

        $data = [
            "auth" => $auth,
            "faq"=> $faq
            ];

            return view("app.faq.edit", $data);
    }

    public function postEditfaq(Request $request)
    {
        $this->validate($request, [
            "faq_id"=> 'required|exists:faqs,id',
            "kategori"=> "required|string",
            "pertanyaan"=> "required|string",
            "pertanyaan"=> "required|string",
        ]);

        $auth = Auth::user();

        $faq = Faq::where("id", $request->faq_id)->first();

        $faq-> kategori = $request->kategori;
        $faq-> pertanyaan = $request->pertanyaan;
        $faq-> jawaban = $request->jawaban;
        $faq->save();
    
        return redirect()->route("faq");
    }

    public function getDeletefaq($faq_id){

        $auth = Auth::user();
        $faq = Faq::where("id", $faq_id)->where("user_id", $auth->id)->first();

        if(!$faq){
            return redirect()->route("faq");
        }

        $faq->delete();
        return redirect()->route("post.destroyFaq");
    }

    // public function updateCoverFaq(Request $request)
    // {
    //     $dataCover = CoverFaq::where('id', 1)->first();

    //     $dataCover->header = $request->input_judul_header;
    //     $dataCover->paragraph = $request->input_deskripsi_header;

    //     if ($request->input_bg_faq) {
    //         $request->validate([
    //             'input_bg_faq' => 'image|mimes:jpeg,png,jpg|max:1024',
    //         ]);

    //         // Mengambil file yang sudah divalidasi dari request
    //         $photo = $request->file('input_bg_faq');

    //         // Membuat nama unik untuk file yang diunggah
    //         $filename = time() . '_faq.' . $photo->getClientOriginalExtension();

    //         // Menentukan direktori tempat penyimpanan file di dalam direktori 'public'
    //         $directory = public_path('assets/img/faq/');

    //         //Pindahkan file ke direktori yang diinginkan
    //         $photo->move($directory, $filename);

    //         // Menghapus photo lama jika ada
    //         if ($dataCover->bg_image && file_exists($dataCover->bg_image)) {
    //             unlink($dataCover->bg_image);
    //         }

    //         $dataCover->bg_image = 'assets/img/faq/' . $filename;
    //     }

    //     $dataCover->update();

    //     return redirect()->back();

    // }
}
