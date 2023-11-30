<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function getAddFaq(){
        $data = [
            "auth" => Auth::user()
        ];
        return view("app.faq.add", $data);
    }
    public function postAddFaq(Request $request){
        
        $this->validate($request, [
            "kategori"=> "required|string",
            "pertanyaan"=> "required|string",
            "jawaban"=> "required|string",
        ]);

        $auth = Auth::user();
    
        Faq::create([
            "kategori"=> $request->kategori,
            "pertanyaan"=> $request->pertanyaan,
            "jawaban"=> $request->jawaban,
        ]);
    
        return redirect()->route("faq");
    }

    public function getEditfaq($faq_id){

        $auth = Auth::user();
        $faq = Faq::where("id", $faq_id)->where("kategori", $auth->id)->first();

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
            "faq_id"=> 'required|exists:faq,id',
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
        $faq = Faq::where("id", $faq_id)->where("kategori", $auth->id)->first();

        if(!$faq){
            return redirect()->route("faq");
        }

        $faq->delete();
        return redirect()->route("faq");
    }
}
