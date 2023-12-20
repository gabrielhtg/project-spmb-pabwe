<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\SubJalurPendaftaran;
use Illuminate\Http\Request;

class SubJalurPendaftaranController extends Controller
{
    public function addSubJalurPendaftaran (Request $request) {
        $username = Auth::user()->username;

        SubJalurPendaftaran::create([
            'jalurPen' => $request->jalurPen,
            'title' => $request->title,
            'deskripsi_jalur' => $request->deskripsi_jalur,
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => $username,
            'updated_by' => $username,
        ]);

        return redirect()->route('admisi-panel');
    }

    public function removeSubJalurPendaftaran (Request $request) {
        SubJalurPendaftaran::where('id', $request->id)->first()->delete();

        return redirect()->back();
    }

    public function editSubJalurPendaftaran (Request $request) {
        $username = Auth::user()->username;

        $dataSubJalurPendaftaran = SubJalurPendaftaran::where('id', $request->id)->first();

        $dataSubJalurPendaftaran->jalurPen = $request->jalurPen;
        $dataSubJalurPendaftaran->title = $request->title;
        $dataSubJalurPendaftaran->deskripsi_jalur = $request->deskripsiJalur;
        $dataSubJalurPendaftaran->updated_by = $username;
        $dataSubJalurPendaftaran->updated_at = now();

        $dataSubJalurPendaftaran->update();

        return redirect()->back();
    }
}